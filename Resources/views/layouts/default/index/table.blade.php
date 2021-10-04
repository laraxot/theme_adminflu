@php
//dddx(get_defined_vars());
$fields = $_panel->getFields(['act' => 'index']);
//dddx($fields);
@endphp

<div id="dataTableBuilder_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
    <div id="" class="row">



        <div id="" class="col-lg-4 col-xs-12">
            <div class="dataTables_length" id="dataTableBuilder_length">
                <label>
                    Show
                    <select name="dataTableBuilder_length" aria-controls="dataTableBuilder"
                        class="form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    entries
                </label>
            </div>
        </div>



        <div id="" class="ml-auto">
            {{-- <div id="dataTableBuilder_filter" class="dataTables_filter">
					<div class="input-group input-group-sm">
						<input type="text" value="" class="form-control" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="fa fa-search">
								</i>
							</span>
						</div>
					</div>
				</div> --}}
            <form method="get">
                <div class="input-group input-group-sm">
                    <input type="search" name="q" id="form_search" value="{{ Request::input('q') }}"
                        class="form-control" placeholder="Search" aria-label="Search">

                    @php
                        $sort_by = head(Request::input('sort', []));
                        //dddx($sort_by);
                    @endphp
                    <select name="sort[by]" id="form_sort" data-style="btn-selectpicker" title=""
                        class="form-control selectpicker" onchange="this.form.submit()">
                        <option value="">Sort By</option>
                        @foreach ($_panel->orderBy() as $sort)
                            <option value="{{ $sort }}" {{ $sort_by == $sort ? 'selected' : '' }}>
                                @lang('theme::txt.sort.'.$sort)</option>
                        @endforeach
                    </select>


                    <div class="input-group-append">
                        <button type="submit" class="input-group-text">
                            <i class="fa fa-search">
                            </i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="dataTableBuilder_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
    <table class="table dataTable no-footer dtr-inline" id="dataTableBuilder" width="100%" role="grid"
        aria-describedby="dataTableBuilder_info" style="width: 100%;">
        <thead>
            <tr role="row">
                @foreach ($fields as $field)
                    <td>{{ str_replace('_', ' ', $field->name) }}</td>
                @endforeach
                {{-- <th title="Image" class="sorting_desc" rowspan="1" colspan="1" style="width: 53px;" aria-label="Image" data-column-index="0">Image</th>
                    <th title="Name" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 130px;" aria-label="Name: activate to sort column ascending" data-column-index="1">Name</th>
                    <th title="Address" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 221px;" aria-label="Address: activate to sort column ascending" data-column-index="2">Address</th>
                    <th title="Phone" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 65px;" aria-label="Phone: activate to sort column ascending" data-column-index="3">Phone</th>
                    <th title="Mobile" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 66px;" aria-label="Mobile: activate to sort column ascending" data-column-index="4">Mobile</th>
                    <th title="Available for delivery" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 77px;" aria-label="Available for delivery: activate to sort column ascending" data-column-index="5">Available for delivery</th>
                    <th title="Closed restaurant" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 87px;" aria-label="Closed restaurant: activate to sort column ascending" data-column-index="6">Closed restaurant</th>
                    <th title="Updated At" class="sorting" tabindex="0" aria-controls="dataTableBuilder" rowspan="1" colspan="1" style="width: 71px;" aria-label="Updated At: activate to sort column ascending" data-column-index="7">Updated At</th>
                    <th title="Action" width="80px" class="sorting_disabled" rowspan="1" colspan="1" style="width: 80px;" aria-label="Action" data-column-index="8">Action</th> --}}
            </tr>
        </thead>
        <tbody>



            @foreach ($rows as $row)
                @php
                    $row_panel = Panel::get($row);
                @endphp

                <tr role="row" class="odd">
                    @foreach ($fields as $field)
                        <td>{!! Theme::inputFreeze(['row' => $row, 'field' => $field]) !!}</td>
                    @endforeach
                    <td>
                        <div class="btn-group btn-group-sm">
                            <a data-toggle="tooltip" data-placement="bottom" title=""
                                href="{{ $row_panel->url(['act' => 'edit']) }}" class="btn btn-link"
                                data-original-title="Edit Restaurant">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form method="POST" action="{{ $row_panel->url(['act' => 'destroy']) }}"
                                accept-charset="UTF-8">
                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
                                <button type="submit" class="btn btn-link text-danger"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="fa fa-trash">
                                    </i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            {{-- <tr role="row" class="even">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Restaurant Altenwerth, Murphy and Wolf</td>
				<td>7360 Langosh Meadows Suite 419
					North Mitchel, AZ 15883
				</td>
				<td>+1.513.515.3048</td>
				<td>1-421-874-4028</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-danger">Yes</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:30)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/2/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/2" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="odd">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Foody Abbott Ltd</td>
				<td>71044 Lilla Lakes Suite 909
					Baumbachburgh, SC 39347-3910
				</td>
				<td>436.312.1104 x354</td>
				<td>1-643-368-0143</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-success">No</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/3/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/3" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="even">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Meal Moen Group</td>
				<td>49524 Schmeler Plaza Apt. 150
					Wunschmouth, WI 72428
				</td>
				<td>(354) 990-0698 x7927</td>
				<td>375.752.9478</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-success">No</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/4/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/4" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="odd">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Meal Herzog-Heaney</td>
				<td>69930 Gusikowski Shoals Suite 233
					Brionnamouth, IL 64575-0846
				</td>
				<td>1-437-824-4212 x367</td>
				<td>441-736-4697</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-success">No</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/5/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/5" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="even">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Burger Bauch, Koepp and Bednar</td>
				<td>38796 Bette Island Apt. 478
					Shieldsfort, VA 93568-8210
				</td>
				<td>758.794.9331 x106</td>
				<td>1-498-289-1224</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-success">No</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/6/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/6" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="odd">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Pizza Smith-Hayes</td>
				<td>3063 Myrtis River
					South Finnside, UT 52576
				</td>
				<td>726-471-5636</td>
				<td>229-268-2135 x233</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-success">No</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/7/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/7" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="even">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Meal Casper, Schroeder and Schamberger</td>
				<td>1316 Crona Place
					North Joannyborough, CA 33387-4280
				</td>
				<td>(713) 569-3462 x423</td>
				<td>1-541-619-5309 x4529</td>
				<td><span class="badge badge-success">Yes</span></td>
				<td><span class="badge badge-danger">Yes</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/8/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/8" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="odd">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Burger Braun and Sons</td>
				<td>7370 Leffler Coves
					South Santos, TN 09367-5754
				</td>
				<td>(408) 453-1956</td>
				<td>860-891-3058 x252</td>
				<td><span class="badge badge-success">Yes</span></td>
				<td><span class="badge badge-danger">Yes</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/9/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/9" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
			</tr>
			<tr role="row" class="even">
				<td class="sorting_1" tabindex="0"><img class=" rounded " style="width:50px" src="http://localhost/food_tribu_project/food_flutter_laravel/public/images/image_default.png" alt="image_default"></td>
				<td>Restaurant McGlynn Ltd</td>
				<td>838 Letitia Centers Apt. 592
					Port Lillie, NY 13344
				</td>
				<td>246.763.6369 x191</td>
				<td>(656) 603-3931</td>
				<td><span class="badge badge-danger">No</span></td>
				<td><span class="badge badge-danger">Yes</span></td>
				<td>
					<p data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Monday 29th June 2020 (14:42:31)">3 weeks ago</p>
				</td>
				<td>
					<div class="btn-group btn-group-sm">
						<a data-toggle="tooltip" data-placement="bottom" title="" href="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/10/edit" class="btn btn-link" data-original-title="Edit Restaurant">
						<i class="fa fa-edit"></i>
						</a>
						<form method="POST" action="http://localhost/food_tribu_project/food_flutter_laravel/public/restaurants/10" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="A9tDcRcCyUhR346Nvgf8zxATCmHBP3baQXocLVKg">
							<button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
						</form>
					</div>
				</td>
            </tr> --}}
        </tbody>
    </table>
    <div class="dataTables_info" id="dataTableBuilder_info" role="status" aria-live="polite">Showing 1 to 10 of 10
        entries</div>
    <div class="dataTables_paginate paging_simple_numbers" id="dataTableBuilder_paginate">
        <ul class="pagination">
            <li class="paginate_button page-item previous disabled" id="dataTableBuilder_previous">
                <a href="#" aria-controls="dataTableBuilder" data-dt-idx="0" tabindex="0"
                    class="page-link">Previous</a>
            </li>
            <li class="paginate_button page-item active">
                <a href="#" aria-controls="dataTableBuilder" data-dt-idx="1" tabindex="0" class="page-link">1</a>
            </li>
            <li class="paginate_button page-item next disabled" id="dataTableBuilder_next">
                <a href="#" aria-controls="dataTableBuilder" data-dt-idx="2" tabindex="0"
                    class="page-link">Next</a>
            </li>
        </ul>
    </div>
</div>

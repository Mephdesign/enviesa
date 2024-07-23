@extends('front.app')
@section('content')
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt mt-5">
								<h1>Zamówienie</h1>
							</div>
						</div>
						<div class="col-lg-7">

						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->



		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Produkt</th>
                          <th class="product-name">Nazwa</th>
                          <th class="product-price">Cena</th>
                          <th class="product-remove">Usuń</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="product-thumbnail">
                            <img src="{{ asset('images/'.$produkt->id.'/'.$produkt->img) }}" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black">{{ $produkt->nazwa }}</h2>
                          </td>
                          <td>{{ $produkt->cena }}</td>
                          <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Przelicz koszyk</button>
                    </div>
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Kontynuuj zakupy</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Kupon rabatowy</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="kod">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Zastosuj kupon</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Podsumowanie</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Suma</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">{{ $produkt->cena }}</strong>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Złóż zamówienie
                            </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Szczegóły zamówienia</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <div class="p-3 p-lg-5 border bg-white">
                                <div class="form-group">
                                    <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                                    <select id="c_country" class="form-control">
                                        <option value="1">Select a country</option>
                                        <option value="2">bangladesh</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">Afghanistan</option>
                                        <option value="5">Ghana</option>
                                        <option value="6">Albania</option>
                                        <option value="7">Bahrain</option>
                                        <option value="8">Colombia</option>
                                        <option value="9">Dominican Republic</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_fname" name="c_fname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_lname" name="c_lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_companyname" class="text-black">Company Name </label>
                                        <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                                    </div>
                                </div>

                                <div class="form-group row mb-5">
                                    <div class="col-md-6">
                                        <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="c_create_account" class="text-black" data-bs-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
                                    <div class="collapse" id="create_an_account">
                                        <div class="py-2 mb-4">
                                            <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <div class="form-group">
                                                <label for="c_account_password" class="text-black">Account Password</label>
                                                <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="c_ship_different_address" class="text-black" data-bs-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
                                    <div class="collapse" id="ship_different_address">
                                        <div class="py-2">

                                            <div class="form-group">
                                                <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                                                <select id="c_diff_country" class="form-control">
                                                    <option value="1">Select a country</option>
                                                    <option value="2">bangladesh</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">Afghanistan</option>
                                                    <option value="5">Ghana</option>
                                                    <option value="6">Albania</option>
                                                    <option value="7">Bahrain</option>
                                                    <option value="8">Colombia</option>
                                                    <option value="9">Dominican Republic</option>
                                                </select>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label for="c_diff_companyname" class="text-black">Company Name </label>
                                                    <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                                                </div>
                                            </div>

                                            <div class="form-group row  mb-3">
                                                <div class="col-md-12">
                                                    <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-5">
                                                <div class="col-md-6">
                                                    <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="c_order_notes" class="text-black">Order Notes</label>
                                    <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

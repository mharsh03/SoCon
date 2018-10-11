<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <form class="form-horizontal" role="form">
            <fieldset>

                <!-- Form Name -->
                <legend>Personal Information Details</legend>

                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="text" name="fistName" placeholder="First Name" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="middleName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="date" placeholder="Date Of Birth" class="form-control">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-4">
                        <select type="gender" placeholder="Gender" class="form-control">
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="checkbox" name="hasSibling" data-toggle="modal" data-target="#sibling">   Has Sibling?
                    </div>
                </div>

                <!-- Address Section -->
                <!-- Form Name -->
                <legend>Address Details</legend>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" name="addressLine1" placeholder="Address Line 1" class="form-control">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" name="addressLine2" placeholder="Address Line 2" class="form-control">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="text" name="city" placeholder="City" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="state" placeholder="State" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="postalCode" placeholder="Post Code" class="form-control">
                    </div>
                </div>
                <!-- Parent/Guadian Contact Section -->
                <!-- Form Name -->
                <legend>Parent/Guadian Information</legend>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="text" name="pFistName" placeholder="First Name" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="pMiddleName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="pLastName" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <select type="pContactMethod" placeholder="Contact Method" class="form-control">
                            <option>Contact Method</option>
                            <option value="phone">Phone</option>
                            <option value="text">Text</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="pPhoneNbr" placeholder="Phone Number" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="email" name="pEmail" placeholder="Email" class="form-control">
                    </div>
                </div>

                <!-- Emergency Contact Section -->
                <!-- Form Name -->
                <legend>Emergency Contact Information</legend>
                <!-- Text input-->
                <div class="form-group">
                    <div class="col-sm-4">
                        <input type="text" name="eFistName" placeholder="First Name" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="eMiddleName" placeholder="Middle Name" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="eLastName" placeholder="Last Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <select type="pContactMethod" placeholder="Contact Method" class="form-control">
                            <option>Contact Method</option>
                            <option value="phone">Phone</option>
                            <option value="text">Text</option>
                            <option value="email">Email</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="ePhoneNbr" placeholder="Phone Number" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <input type="email" name="eEmail" placeholder="Email" class="form-control">
                    </div>
                </div>

                <legend>Registration for classes</legend>
                <div class="form-group">
                    <div class="col-sm-2">
                        <input type="checkbox" name="VietNgu">   Viet Ngu
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="Math">   Math
                    </div>
                    <div class="col-sm-2">
                        <input type="checkbox" name="paid"  data-toggle="modal" data-target="#payment">   Pay
                    </div>
                </div>
                <!-- Command -->
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->


<!-- Has Sibling Modal -->
<div class="modal fade" id="sibling" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Select His/Her Sibling</h4>
            </div>
            <div class="modal-body">
                <div>
                    <input type="text" name="filter" style="border-radius: 10px" placeholder="filter">
                </div>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <tr>
                            <th> </th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Tam</td>
                            <td>VuTran</td>
                            <td>3085 Aspen Dr Coonrapid MN 44532</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Thuy-Sa</td>
                            <td>Truong</td>
                            <td>13231 Cliff Ave Burnsville, MN 55337</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Han</td>
                            <td>Bui</td>
                            <td>1341 Trailer Tl Lakeville, MN 55321</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Done</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Payment Modal -->
<div class="modal fade" id="payment" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Payment</h4>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form-horizontal" role="form">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Viet Ngu Payment</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="vnPayment" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label>Math Payment</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="mathPayment" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label>Other Payment</label>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="otherPayment" placeholder="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal" aria-hidden="true" style="width: 100%;">
                                <span class="glyphicon glyphicon-ok-sign"></span>  Done</button>
                        </div>
                    </form>
                </div>  <!-- div class="col-md-8 col-md-offset-1" -->
            </div>  <!-- div class="row" -->
        </div><!-- /.modal-content -->
    </div><!-- div class="modal-dialog -->
</div>
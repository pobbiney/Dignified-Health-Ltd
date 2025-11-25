 <!-- large-modal-start -->
            <div class="modal fade" id="exampleModalLargeE" tabindex="-1"
                 aria-hidden="true" >
                <div class="modal-dialog modal-xl" >
                    <div class="modal-content">
                        <form enctype="multipart/form-data" method="post" action="{{ route ('edit-testimonial-process') }}">
                                  @csrf
                            <div class="modal-header bg-primary-800" >
                                <h1 class="modal-title fs-5 text-white" id="exampleModalLarge2">Update  Testimonial</h1>
                                <button type="button" class="fs-5 border-0 bg-none text-white" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa-solid fa-xmark fs-3"></i></button>
                            </div>
                            <div class="modal-body" ><br/>
                                <div class="row" >
                                    <div class="col-md-6">
                                        <label for="userName" class="form-label">Client's Name</label>
                                        <input type="text" class="form-control"   name="name" placeholder="Enter Name Here" id="clientName">
                                        @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="userName" class="form-label">Upload Photo</label>
                                        <input type="file" class="form-control"   name="photo" placeholder="Upload Photo Here">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 15px">
                                    <div class="col-md-12">
                                    <label for="userName" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" rows="6" id="clientMeg"></textarea>
                                        @error('message') <small style="color:red"> {{ $message}}</small> @enderror
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 15px">
                                    <div class="col-md-3">
                                        <label for="userName" class="form-label">Status</label>
                                        <select class="form-control" name="status" id="clientstatus">
                                            <option value="" selected disabled>--Choose Status--</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                        @error('status') <small style="color:red"> {{ $message}}</small> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" ><i class="fa fa-save"></i> Submit</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                <input type="hidden" name="testimonial_id" id="testID"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
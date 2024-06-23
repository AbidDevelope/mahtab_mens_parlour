<section>
    <div id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>

                <form action="{{ route('appointment') }}" method="POST" id="myform">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="hidden" name="id" id="id" placeholder="Your ID" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <input id="datepicker" name="dates" placeholder="Date" required>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <input id="timepicker" name="appointment_time" placeholder="Time" required>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <select class="form-select wide" name="choose_services" id="default-select" required>
                                <option value="">Choose services</option>
                                <option value="shave">shave</option>
                                <option value="cutting">cutting</option>
                                <option value="Facial">Facial</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <input type="number" name="age" placeholder="Age" required>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <input type="text" name="name" placeholder="Your name" required>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <input type="tel" name="mobile" maxlength="10"
                                onkeypress="return /^-?[0-9]*$/.test(this.value+event.key)"
                                placeholder="Enter Phone Number" required>
                        </div>
                        <div class="col-xl-12">
                            <input type="text" name="address" placeholder="Your Address" required>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" id="submit" class="boxed-btn3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::has('success'))
<script>
// swal("Coming Soon", "{{ Session::get('success') }}", "warning", {
//     button: true,
//     button: "OK",
//     footer: '<a href="https://goo.gl/maps/HKwa7eN8YHVbxV4Z8">Google Map Destination</a>',
//     dangerMode: true,
// });
Swal.fire({
    icon: 'warning',
    title: 'Coming Soon!',
    text: 'Please visit the shop.',
    footer: '<a href="https://goo.gl/maps/HKwa7eN8YHVbxV4Z8">Google Map Location</a>'
})
</script>
@endif
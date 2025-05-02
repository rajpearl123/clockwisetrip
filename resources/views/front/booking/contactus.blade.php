@extends('front.layout.app');
@section('content')
<style>
   .alert {
      padding: 15px;
      border-radius: 5px;
      margin-top: 20px;
   }

   .alert-success {
      color: #155724;
      background-color: #d4edda;
      border: 1px solid #c3e6cb;
   }

   .alert-danger {
      color: #721c24;
      background-color: #f8d7da;
      border: 1px solid #f5c6cb;
   }
</style>
<section data-anim="fade" class="d-flex items-center mt-60 py-40 border-top-light">
   <div class="container">
      <div class="row y-gap-10 items-center justify-between">
         <div class="col-auto">
            <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
               <div class="col-auto">
                  <div class="">India</div>
               </div>
               <div class="col-auto">
                  <div class="">&gt;</div>
               </div>
               <div class="col-auto">
                  <div class="">Gurugram</div>
               </div>
               <div class="col-auto">
                  <div class="">&gt;</div>
               </div>
               <div class="col-auto">
                  <div class="text-dark-1">Sector 48</div>
               </div>
            </div>
         </div>
         <div class="col-auto">
            <a href="#" class="text-14 text-light-1">Gurugram Tourism: Best of Gurugram</a>
         </div>
      </div>
   </div>
</section>
<div class="contact-banner">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 col-lg-5"></div>
         <div class="col-xl-5 col-lg-7">
            <form id="contactForm">
               <div class="map-form px-40 pt-40 pb-50 lg:px-30 lg:py-30 md:px-24 md:py-24 bg-white rounded-4 shadow-4">
                  <div class="text-22 fw-500">
                     Send a message
                  </div>
                  <div class="row y-gap-20 pt-20">
                     <div class="col-12">
                        <div class="form-input">
                           <input type="text" name="full_name" required class="w-100">
                           <label class="lh-1 text-16 text-light-1">Full Name</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-input">
                           <input type="email" name="email" required class="w-100">
                           <label class="lh-1 text-16 text-light-1">Email</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-input">
                           <input type="text" name="subject" required class="w-100">
                           <label class="lh-1 text-16 text-light-1">Subject</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-input">
                           <textarea name="message" required rows="4" class="w-100"></textarea>
                           <label class="lh-1 text-16 text-light-1">Your Message</label>
                        </div>
                     </div>
                     <div class="col-auto">
                        <button type="submit" class="button px-24 h-50 -dark-1 bg-blue-1 text-white">
                           Send a Message
                           <div class="icon-arrow-top-right ml-15"></div>
                        </button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
   $(document).ready(function() {
      $('#contactForm').on('submit', function(e) {
         e.preventDefault(); // Prevent the form from submitting in the traditional way

         let formData = {
            full_name: $('input[name="full_name"]').val(),
            email: $('input[name="email"]').val(),
            subject: $('input[name="subject"]').val(),
            message: $('textarea[name="message"]').val()
         };

         $.ajax({
            url: '{{ route("contact-submit") }}', // Laravel API route
            type: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            beforeSend: function() {
               // Optionally show a loading message or spinner
            },
            success: function(response) {
               alert(response.message); // Success message
               $('#contactForm')[0].reset(); // Reset the form
            },
            error: function(xhr) {
               // Handle validation errors
               if (xhr.status === 400) {
                  let errors = xhr.responseJSON.errors;
                  let errorMessage = '';
                  $.each(errors, function(key, value) {
                     errorMessage += value[0] + '\n';
                  });
                  alert(errorMessage);
               } else {
                  alert('An error occurred. Please try again.');
               }
            }
         });
      });
   });
</script>

<section>
   <div class="relative container">
      <div class="row justify-end">
      </div>
   </div>
   </div>
</section>
<section class="layout-pt-md layout-pb-lg">
   <div class="container">
      <div class="row x-gap-80 y-gap-20 justify-between">
         <div class="col-12">
            <div class="text-30 sm:text-24 fw-600">Contact Us</div>
         </div>
         <div class="col-lg-3">
            <div class="text-14 text-light-1">Address</div>
            <div class="text-18 fw-500 mt-10 address">328 Queensberry Street, North Melbourne VIC 3051, Australia.</div>
         </div>
         <div class="col-auto">
            <div class="text-14 text-light-1">Toll Free Customer Care</div>
            <div class="text-18 fw-500 mt-10 toll-free">+(1) 123 456 7890</div>
         </div>
         <div class="col-auto">
            <div class="text-14 text-light-1">Need live support?</div>
            <div class="text-18 fw-500 mt-10 live-support">hi@gotrip.com</div>
         </div>
         <div class="col-auto">
            <div class="text-14 text-light-1">Follow us on social media</div>
            <div class="d-flex x-gap-20 items-center mt-10">
               <a href="#"><i class="icon-facebook text-14"></i></a>
               <a href="#"><i class="icon-twitter text-14"></i></a>
               <a href="#"><i class="icon-instagram text-14"></i></a>
               <a href="#"><i class="icon-linkedin text-14"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   function fetchContactDetails() {
      $.ajax({
         url: '{{ route("contact-details") }}', // Your API endpoint
         type: 'GET',
         success: function(data) {
            // Update the contact details in the section
            $('.address').text(data.address);
            $('.toll-free').text(data.toll_free_customer_care);
            $('.live-support').text(data.live_support_email);

            // Also update the form fields if needed
            $('#Address').val(data.address);
            $('#Toll').val(data.toll_free_customer_care);
            $('#live').val(data.live_support_email);
         },
         error: function(xhr) {
            alert('Failed to fetch contact details.');
         }
      });
   }

   // Fetch the details on page load
   $(document).ready(function() {
      fetchContactDetails();
   });
</script>

<section class="layout-pt-md layout-pb-lg">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d55121.867205642375!2d77.9911168!3d30.290739200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1724750094745!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
   <div class="container">
      <div class="row justify-center text-center">
         <div class="col-auto">
            <div class="sectionTitle -md">
               <h2 class="sectionTitle__title">Why Choose Us</h2>
               <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
         </div>
      </div>
      <div class="row y-gap-40 justify-between pt-50">
         <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 ">
               <div class="d-flex justify-center">
                  <img src="#" data-src="	https://test.pearl-developer.com/clockwisehotel/public/front/img/featureIcons/1/1.svg" alt="image" class="js-lazy">
               </div>
               <div class="text-center mt-30">
                  <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                  <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 ">
               <div class="d-flex justify-center">
                  <img src="#" data-src="https://test.pearl-developer.com/clockwisehotel/public/front/img/featureIcons/1/2.svg" alt="image" class="js-lazy">
               </div>
               <div class="text-center mt-30">
                  <h4 class="text-18 fw-500">Easy &amp; Quick Booking</h4>
                  <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="featureIcon -type-1 ">
               <div class="d-flex justify-center">
                  <img src="#" data-src="https://test.pearl-developer.com/clockwisehotel/public/front/img/featureIcons/1/3.svg" alt="image" class="js-lazy">
               </div>
               <div class="text-center mt-30">
                  <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                  <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="layout-pt-md layout-pb-md bg-dark-2">
   <div class="container">
      <div class="row y-gap-30 justify-between items-center">
         <div class="col-auto">
            <div class="row y-gap-20  flex-wrap items-center">
               <div class="col-auto">
                  <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
               </div>
               <div class="col-auto">
                  <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                  <div class="text-white">Sign up and we'll send the best deals to you</div>
               </div>
            </div>
         </div>
         <div class="col-auto">
            <!-- <form id="newsletterForm">
               @csrf
               <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                  <div>
                     <input type="email" name="email" class="bg-white h-60" type="text"  required />
                  </div>
                  <div>
                     <button id="message" class="button -md h-60 bg-blue-1 text-white" type="submit">Subscribe</button>
                  </div>
               </div>
            </form> -->
            <form action="{{ route('subscribe') }}" method="POST" id="newsletterForm">
               @csrf
               <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                  <div>
                     <input type="email" name="email" class="bg-white h-60" placeholder="Enter your email" required>
                  </div>
                  <div>
                     <button class="button px-20 fw-400 text-16 border-white -outline-white h-60 text-white ml-20" type="submit">Subscribe</button>
                  </div>
               </div>
            </form>

            <!-- Display success or error messages -->
            @if(session('message'))
            <div class="alert alert-success" role="alert" style="color: green; background-color: #d4edda; padding: 15px; border-radius: 5px; margin-top: 20px;">
               {{ session('message') }}
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger" role="alert" style="color: red; background-color: #f8d7da; padding: 15px; border-radius: 5px; margin-top: 20px;">
               <ul>
                  @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif

         </div>
      </div>
   </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
   // $(document).ready(function() {
   //     $('#newsletterForm').on('submit', function(e) {
   //         e.preventDefault(); // Prevent the form from submitting the default way

   //         let email = $('input[name="email"]').val();
   //         console.log(email);

   //         $.ajax({
   //             url: '{{ route("subscribe") }}',
   //             type: 'POST',
   //             dataType: 'json',
   //             contentType: 'application/json',
   //             data: JSON.stringify({ email: email }),
   //             beforeSend: function() {
   //                 // Show loading message or spinner
   //                 $('#message').html('Submitting...');
   //             },
   //             success: function(response) {
   //                 // Clear the loading message
   //                 $('#message').html('');
   //                 // Display success alert
   //                 alert(response.message);
   //                 // Optionally clear the input field
   //                 $('input[name="email"]').val('');
   //             },
   //             error: function(xhr, status, error) {
   //                 // Clear the loading message
   //                 $('#message').html('Subscribe');
   //                 // Parse and display error messages
   //                 if (xhr.status === 400) {
   //                     let errors = xhr.responseJSON.errors;
   //                     alert('Error: ' + errors.email);
   //                 } else {
   //                     alert('An error occurred. Please try again later.');
   //                 }
   //             }
   //         });
   //     });
   // });


   //    $(document).ready(function() {
   //     $.ajaxSetup({
   //         headers: {
   //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //         }
   //     });

   //     $('#newsletterForm').on('submit', function(e) {
   //         e.preventDefault();

   //         let email = $('input[name="email"]').val(); // Ensure this correctly retrieves the email
   //         console.log("Email submitted: " + email); // Debugging

   //         $.ajax({
   //             url: '{{ route("subscribe") }}',
   //             type: 'POST',
   //             dataType: 'json',
   //             data: { email: email }, // Send as form data
   //             beforeSend: function() {
   //                 $('#message').html('<span style="color: blue;">Submitting...</span>');
   //             },
   //             success: function(response) {
   //                 $('#message').html('<span style="color: green;">' + response.message + '</span>');
   //                 $('input[name="email"]').val(''); // Clear input field
   //             },
   //             error: function(xhr) {
   //                 $('#message').html('<span style="color: red;">Subscribe</span>');
   //                 if (xhr.status === 400) {
   //                     let errors = xhr.responseJSON.errors;
   //                     $('#message').html('<span style="color: red;">Error: ' + errors.email + '</span>');
   //                 } else {
   //                     $('#message').html('<span style="color: red;">An error occurred. Please try again later.</span>');
   //                 }
   //             }
   //         });
   //     });
   // });
</script>
@endsection
    @extends('backend.layouts.app')
    @section('content')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />


        <div class="container mt-5">
            <h1 class="text-center"></h1>
            <h2 class="text-center text-muted"></h2>

            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="{{ asset('path/to/your/image.jpg') }}" class="img-fluid" alt="About Us Image" id="about-image">
                </div>
                <div class="col-md-6">
                    <p class="lead"></p>
                </div>
            </div>

            <div class="card p-4 mt-4 col-12 shadow rounded">
                <h4 class="mb-3 text-primary">Update Contact Us Information</h4>
            
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 me-2 text-secondary">Address:</h5>
                        <p id="currentAddress" class="mb-0 text-dark fw-semibold"></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 me-2 text-secondary">Toll Free Customer Care:</h5>
                        <p id="currentToll" class="mb-0 text-dark fw-semibold"></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 me-2 text-secondary">Need live support:</h5>
                        <p id="currentLive" class="mb-0 text-dark fw-semibold"></p>
                    </div>
                </div>
            
                <form id="contactForm" method="POST">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="Address" class="form-label fw-semibold">Address</label>
                            <input type="text" class="form-control shadow-sm" id="Address" name="Address" required>
                        </div>
            
                        <div class="col-md-4">
                            <label for="Toll" class="form-label fw-semibold">Toll Free Customer Care</label>
                            <input type="text" class="form-control shadow-sm" id="Toll" name="Toll" required>
                        </div>
            
                        <div class="col-md-4">
                            <label for="live" class="form-label fw-semibold">Need live support?</label>
                            <input type="email" class="form-control shadow-sm" id="live" name="live" required>
                        </div>
                    </div>
            
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </div>
                </form>
            </div>
            
        </div>

        <!-- DataTable to display Contact Us submissions -->
        <div class="card p-4 mt-4 shadow rounded">
            <h4 class="mb-3 text-primary">Contact Us Submissions</h4>
            
            <div class="table-responsive">
                <table id="contactTable" class="table table-striped table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Sno</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be populated here using AJAX -->
                    </tbody>
                </table>
            </div>
        </div>
        

        <!-- DataTable initialization -->


        <!-- DataTable for Newsletter Subscriptions -->
        <div class="card p-3 mt-3">
            <h4>Newsletter Subscriptions</h4>
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Email</th>
                        <th>Subscribed At</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be populated here using AJAX -->
                </tbody>
            </table>
        </div>
    @endsection

    @push('js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                // Fetch contact details
                function fetchContactDetails() {
                    $.ajax({
                        url: '{{ route('contact-details') }}', // Your API endpoint
                        type: 'GET',
                        success: function(data) {
                            $('#currentAddress').text(data.address);
                            $('#currentToll').text(data.toll_free_customer_care);
                            $('#currentLive').text(data.live_support_email);
                            $('#Address').val(data.address);
                            $('#Toll').val(data.toll_free_customer_care);
                            $('#live').val(data.live_support_email);
                        },
                        error: function(xhr) {
                            alert('Failed to fetch contact details.');
                        }
                    });
                }

                // Update contact details
                $('#contactForm').on('submit', function(event) {
                    event.preventDefault(); // Prevent the default form submission

                    var formData = $(this).serialize();

                    $.ajax({
                        url: '{{ route('contact-details') }}', // Your API endpoint
                        type: 'PUT',
                        data: formData,
                        success: function(response) {
                            alert(response.message);
                            fetchContactDetails(); // Refresh the data after successful submission
                        },
                        error: function(xhr) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            for (var error in errors) {
                                errorMessage += errors[error].join(', ') + '\n';
                            }
                            alert('Errors:\n' + errorMessage);
                        }
                    });
                });

                // Fetch the details on page load
                fetchContactDetails();
            });
        </script>


        <script>
            $(document).ready(function() {
                $.ajax({
                    url: '{{ route('contacts') }}', // The API route to fetch contact form submissions
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        let tableBody = '';
                        $.each(data, function(index, contact) {
                            tableBody += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${contact.full_name}</td>
                                <td>${contact.email}</td>
                                <td>${contact.subject}</td>
                                <td>${contact.message}</td>
                                <td>${new Date(contact.created_at).toLocaleString()}</td>
                            </tr>
                        `;
                        });

                        $('#contactTable tbody').html(tableBody);
                        $('#contactTable').DataTable();
                    },
                    error: function(xhr, status, error) {
                        alert('Error fetching data. Please try again.');
                    }
                });
            });
        </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/subscriptions',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let tableBody = '';
                    $.each(response.data, function(index, subscription) {
                        tableBody += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${subscription.email}</td>
                                <td>${new Date(subscription.created_at).toLocaleString()}</td>
                            </tr>
                        `;
                    });

                    $('#myTable tbody').html(tableBody);
                    $('#myTable').DataTable();
                },
                error: function(xhr, status, error) {
                    alert('Error fetching data. Please try again.');
                }
            });
        });
    </script>



    @endpush

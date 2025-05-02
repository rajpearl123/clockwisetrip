<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Invoice - Enchanting Andamans</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>

     .top-head .logo {
        max-width: 297px !important;
        background-color: red;
    }
        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .top-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .top-head .logo {
            max-width: 150px;
        }
        h1 {
            color: #007bff;
        }
        hr {
            margin: 20px 0;
            border-color: #ddd;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <section class="container" id="dataTable">
        @php
            $footer_single = \App\Models\Footer::first();
        @endphp

        <div class="top-head">
            <div>
                <img class="logo text-red" src="https://test.pearl-developer.com/clockwisehotel/public/front/img/logo/chockwisehotel_logo.png" alt="Enchanting Andamans Logo">
            </div>
            <div class="text-right">
                <p><strong>GST: </strong></p>
                <p><strong>{{$footer_single->email}}</strong></p>
            </div>
        </div>
        <div class="text-center">
            <h1><strong>Clockwise Hotel</strong></h1>
            <p>ONE STOP SOLUTION FOR TRAVEL REQUIREMENTS IN CLOCKWISEHOTEL</p>
            <!-- <p><strong>Registered under A&amp;N Administration Establishments Regulation, 2004</strong></p> -->
            <p><strong>{{$property_detail->address}}</strong></p>
            <p><strong>Ph: +91 {{$footer_single->mobile_no}}</strong></p>
            <p><strong>Email: <a href="mailto:'{{$footer_single->email}}'<">{{$footer_single->email}}<</a>, <a href="mailto:contact@enchantingandamans.com">{{Auth::user()->email}}</a></strong></p>
        </div>
        <hr>
        <table>
            <tbody>
               <tr>
                    <th>Invoice &amp; Receipt Date</th>
                    <td id="dateCell"></td>
                </tr>
                <tr>
                    <th>Date of Travel</th>
                    <td>{{ \Carbon\Carbon::parse($booking_information->created_at)->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <th>Guest Name</th>
                    <td>{{$user_detail->first_name}} {{$user_detail->last_name}}</td>
                </tr>
                <tr>
                    <th>No. of Guests</th>
                    <td>{{$user_detail->Address}}</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>Rs 44,762 + 5% GST = Rs 47,000/-</td>
                </tr>
                <tr>
                    <th>Amount Received</th>
                    <td>Rs 47,000/- (Rounded off)</td>
                </tr>
            </tbody>
        </table>
        <!-- <h2>Itinerary</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>22 Sep</td>
                    <td>Arrival at airport. Pickup and drop at the hotel. Visit Cellular Jail, Carbyn's Cove, Light &amp; Sound Show. Stay at Island Tourister, Port Blair.</td>
                </tr>
                <tr>
                    <td>23 Sep</td>
                    <td>Visit Ross Island and North Bay Island. Stay at Port Blair.</td>
                </tr>
                <tr>
                    <td>24 Sep</td>
                    <td>Depart for Havelock (NAUTIKA0730). Visit Radhanagar Beach. Stay at Haywizz.</td>
                </tr>
                <tr>
                    <td>25 Sep</td>
                    <td>Morning return to Port Blair (MAKRUZZ0800). Evening: Visit Chidiyatapu Beach, local market. Stay at Island Tourister, Port Blair.</td>
                </tr>
                <tr>
                    <td>26 Sep</td>
                    <td>Drop at airport Departure.</td>
                </tr>
            </tbody>
        </table> -->
        <h2>Accommodation</h2>
        <table>
            <tbody>
                <tr>
                    <th>Location</th>
                    <th>Hotel</th>
                </tr>
                <tr>
                    <td>{{$property_detail->address}}</td>
                    <td>{{$property_detail->title}}</td>
                </tr>
                <!-- <tr>
                    <td>Havelock</td>
                    <td>Haywizz Havelock, Premium AC Pool View</td>
                </tr> -->
            </tbody>
        </table>
         @php $facilities = json_decode($property_detail['facilities'], true); @endphp
        <h2>Inclusions</h2>
        <ul>
            @if(!empty($facilities))
            @foreach($facilities as $facility)
                <li>{{$facility}}.</li>
            @endforeach
            @endif
        </ul>
        <div class="text-right">
            <p>For Clockwise Hotel</p>
        </div>
        <hr>
        <div class="text-center">
            <p><strong>This invoice is computer-generated and does not require a signature.</strong></p>
        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional: jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
    // Get today's date
    const today = new Date();

    // Format the date as "dd MMM yy"
    const options = { day: '2-digit', month: 'short', year: '2-digit' };
    const formattedDate = today.toLocaleDateString('en-GB', options);

    // Display the date in the table cell
    document.getElementById('dateCell').textContent = `dated ${formattedDate}`;
</script> 

</body>
</html>

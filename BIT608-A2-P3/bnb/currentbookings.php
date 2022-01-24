<!-- Assumptions -->
<!-- The customer is logged in.-->

<!DOCTYPE HTML>
<html>

<head>
    <title>Current Bookings</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h1>Current bookings</h1>
    <h2><a href='makeabooking.html'>[Make a booking]</a><a href='/bnb/'>[Return to the main page]</a></h2>

    <form method="POST" action="makebooking.php">
        <fieldset>
            <legend>Filter Parameters</legend>
            <p>
                <label for="search_name">Search Name: </label>
                <input type="text" id="search_name" name="search_name" required>
            </p>
            <p>
                <label for="from_date">From date: </label>
                <input type="date" id="from_date" name="from_date" required>
                <label for="to_date">To date: </label>
                <input type="date" id="to_date" name="to_date" required>
            </p>
            <button type="reset">Clear Filters</button>
        </fieldset>

        <table id="currentbookings" name="currentbookings">
            <thead>
                <tr>
                    <th>Booking (room, dates)</th>
                    <th>Customer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kellie, 2018-09-15, 2018-09-19</td>
                    <td>Jordan, Garrison</td>
                    <td>
                        <a href=''>[view]</a>
                        <a href=''>[edit]</a>
                        <a href=''>[manage reviews]</a>
                        <a href=''>[delete]</a>
                    </td>
                </tr>
                <tr>
                    <td>Kellie, 2018-09-20, 2018-09-23</td>
                    <td>Walker, Irene</td>
                    <td>
                        <a href=''>[view]</a>
                        <a href=''>[edit]</a>
                        <a href=''>[manage reviews]</a>
                        <a href=''>[delete]</a>
                    </td>
                </tr>
                <tr>
                    <td>Herman, 2018-10-01, 2018-10-14</td>
                    <td>Walker, Irene</td>
                    <td>
                        <a href=''>[view]</a>
                        <a href=''>[edit]</a>
                        <a href=''>[manage reviews]</a>
                        <a href=''>[delete]</a>
                    </td>
                </tr>
                <tr>
                    <td>Herman, 2018-10-16, 2018-10-20</td>
                    <td>Sellers, Beverly</td>
                    <td>
                        <a href=''>[view]</a>
                        <a href=''>[edit]</a>
                        <a href=''>[manage reviews]</a>
                        <a href=''>[delete]</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

</body>

</html>
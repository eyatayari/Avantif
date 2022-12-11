<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 - Dynamically Add or Remove input fields using JQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>


<div class="container">
    <form autocomplete="off" method="POST" action="{{ route("facture.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="required" for="purpose">Purpose</label>
            <input class="form-control" type="text" name="numFacture" id="purpose" disabled value="{{$facture->numFacture}}">
            <span class="help-block"></span>
        </div>

        <div class="form-group">
            <label class="required" for="DateFacture">Date</label>
            <input class="form-control" type="date" name="DateFacture" id="DateFacture" required>
            <span class="help-block"></span>
        </div>

        <div class="form-group">
            <label class="required" for="requested_by">Released By</label>
            <input class="form-control" type="text" name="requested_by" id="requested_by" required>
            <span class="help-block"></span>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Qty</th>
                <th>Unit</th>
                <th>Description</th>
                <th>
                    <a href="" class="addRow" onclick="addRow()">test<i class="fas fa-plus"></i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input type="number" name="rows[0][nbr]" class="form-control quantity" required>
                </td>
                <td>
                    <input type="text" name="rows[0][unit]" class="form-control" required>
                </td>
                <td>
                    <input type="text" name="rows[0][nom]" class="form-control" required>
                </td>
                <td>

                </td>
            </tr>
            </tbody>
        </table>



        <div class="form-group">
            <button class="btn btn-danger" type="submit">
                Save
            </button>
        </div>
    </form>
</div>


<script type="text/javascript">
    function addRow()
    {
        var tr = '<tr>'+
            '<td><input type="number" name="rows[0][qty]" class="form-control quantity"></td>'+
            '<td><input type="text" name="rows[0][unit]" class="form-control quantity"></td>'+
            '<td><input type="text" name="rows[0][description]" class="form-control quantity"></td>'+
            '<td><a class="btn btn-danger remove"><i class="fas fa-times"></i></a></td>'+
            '</tr>';
        $('tbody').append(tr);
    }
</script>
</body>
</html>
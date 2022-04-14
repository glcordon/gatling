<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-4 text-center">
        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            
            <div class="card-body">
                {!! QrCode::size(300)->generate('https://cocre8d.com/gatling/admin/bodies/'.$id) !!}
                <br />{{$remain->last_name. ', ' . $remain->first_name}} - {{ $remain->service_id_number ?? 'No Service ID'}}
            </div>
        </div>
    </div>
</body>
</html>
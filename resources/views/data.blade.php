<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>

    <style>
    .gridview {
    font-family: "THSarabunNew";
    background-color: #FFFFFF;
    width: 100%;
    font-size: small;
    }

    .gridview th {
        background: #0CA3D2;
        padding: 5px;
        font-size: small;
    }

    .gridview td {
        background: #B6E1EE;
        color: #333333;
        font: small "THSarabunNew";
        padding: 4px;
    }
    .gridview td {
        background: #B6E1EE;
        color: #333333;
        font: small "THSarabunNew";
        padding: 4px;
    }

    .gridview tr.even td {
        background: #FFFFFF;
    }

    /* ------------------------------------------------------------------ */
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
        }


    </style>
</head>
<body>
<div class="container">
    <table  id="showBooksIn" class="table table-bordered gridview">
        <tr>
            <td>รายการ</td>
        </tr>
        <thead>
            <tr>
              <th scope="col">NAME</th>
              <th scope="col">PRICE(Bath)</th>
              {{-- <th scope="col">Date_created</th> --}}
              <th scope="col">Date_updated</th>
              <th scope="col">Note</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($invoie_datas as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                {{-- <td>{{$item->created_at}}</td> --}}
                <td>{{$item->updated_at}}</td>
                <td>{{$item->Note}}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>

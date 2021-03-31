<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <style>
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
        body {
    margin-top: 20px;
    }
    </style>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <address>
                            <strong>บริษัท ไอเดียเคิล จำกัด Ideacle Co., Ltd.</strong>
                            <br>
                            เลขที่ 94 หมู่ 16 ต.ป่าไผ่ อ.สันทราย จ.เชียงใหม่ 50210
                            <br>
                            <abbr title="Phone">P:</abbr> (+66) 4806-8936,(0) 5387-3010, โทรสาร (+0) 5387-3017, e-mail : kittipong@ideacle.com
                            {{-- <br>
                            Los Angeles, CA 90026
                            <br>
                            <abbr title="Phone">P:</abbr> (213) 484-6829 --}}
                        </address>
                    </div>
                    {{-- <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <p>
                            <em>Date: 1st November, 2013</em>
                        </p>
                        <p>
                            <em>Receipt #: 34522677W</em>
                        </p>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="text-center">
                        {{-- <h1>Receipt</h1> --}}
                    </div>
                    </span>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">รายการ</th>
                                {{-- <th scope="col">last_name</th> --}}
                                {{-- <th scope="col">Date_created</th> --}}
                                {{-- <th scope="col">list</th> --}}
                                <th scope="col">ราคา</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">หมายเหตุ</th>

                              </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoies  as $i=>$item)
                            <tr>
                                <th scope="row">{{$i+1}}</th>
                                <td>{{$item->name}}</td>
                                {{-- <td>{{$item->last_name}}</td> --}}
                                {{-- <td>{{$item->created_at}}</td> --}}
                                {{-- <td>{{$item->list}}</td> --}}
                                <td>{{$item->price}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>{{$item->Note}}</td>
                            </tr>
                        @endforeach
                            {{-- <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right">
                                <p>
                                    <strong>Subtotal: </strong>
                                </p>
                                <p>
                                    <strong>Tax: </strong>
                                </p></td>
                                <td class="text-center">
                                <p>
                                    <strong>$6.94</strong>
                                </p>
                                <p>
                                    <strong>$6.94</strong>
                                </p></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right"><h4><strong>Total: </strong></h4></td>
                                <td class="text-center text-danger"><h4><strong>$31.53</strong></h4></td>
                            </tr> --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

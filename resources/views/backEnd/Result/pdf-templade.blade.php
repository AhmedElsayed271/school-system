<!DOCTYPE html>
<html lang="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('public/css/') }}/bootstrap.min.css" />

    <style>
        .head {
            margin-top: 40px;
            margin-bottom: 30px;
            overflow: hidden;
        }

        table,
        tr,
        td,
        th {
            border: 4px solid #1f497d;
            text-align: center;
        }

        table:first-of-type tbody tr td {
            color: #c00000;
            text-align: center;
            font-weight: bold;
        }

        table:first-of-type thead tr th {
            padding: 40px
        }

        .logo-title {
            border: 4px solid #1f497d;
            border-bottom: 0;
            display: flex;

            align-items: center;
        }

        .logo-title div {
            width: 33.333%;
            text-align: center;
            font-weight: bold;
            font-size: 26px;
        }

        thead tr:first-of-type th {
            color: #c00000;
            font-weight: bold;
        }

        th,
        td {
            color: #000;
            font-weight: bold;
        }

        p {
            font-weight: bold;
            text-align: end;
        }

        img {
            width: 150px;
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="head">
            <h2 class="float-start">PUPIL EVALUATION</h2>
            <h2 class="float-end">تقيم التلميذ</h2>
        </div>
        <div class="logo-title">
            <div class="title-english">SECOND HOME SCHOOL PRIVET</div>
            <div class="title-english"><img src="{{ asset('public/image/') }}/launcher.jpg" /></div>
            <div class="title-english">مدرسة البيت الثاني الابتدائية الخاصة</div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>رقم الطالب</th>
                    <th></th>
                    <th>Student no.</th>
                    <th>رقم هوية الاحوال المدنية</th>
                    <th></th>
                    <th>Civil statusid number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>المحاقظة</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td>Governorate</td>
                </tr>
                <tr>
                    <td>اسم الطالب</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td>Student name</td>
                </tr>
                <tr>
                    <td>الصف</td>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td>Class</td>
                </tr>
                <tr>
                    <td rowspan="2" style="line-height: 4.5;">Brith Date</td>
                    <td style="height: 50px;">The State</td>
                    <td></td>
                    <td></td>
                    <td>الدولة</td>
                    <td rowspan="2" style="line-height: 4.5;">بيانات الميلاد</td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td></td>
                    <td style="height: 50px"></td>
                    <td style="height: 50px">تاريخ الميلاد</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">The behavior</th>
                    <th scope="col" style="width: 35%"></th>
                    <th scope="col" style="width: 35%"></th>
                    <th scope="col">السلوك</th>
                </tr>
            </thead>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">المواد الدراسية</th>
                    <th scope="col">الدرجة كتابة</th>
                    <th scope="col">الدرجة رقما</th>
                    <th scope="col">Subjects</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $data)
                    <tr>
                        <th>{{ $data->subject->subject_name }}</th>
                        <td>{{ $data->total_marks }}</td>
                        <td></td>
                        <td>Islamic</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">المنهج الاثرائي</th>
                    <th scope="col">الدرجة رقما</th>
                    <th scope="col">الدرجة حروف</th>
                    <th scope="col">Thematic approach</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>الحساب الذهني</th>
                    <td></td>
                    <td></td>
                    <td>BRAINY KIDS</td>
                </tr>
                <tr>
                    <th>كارما</th>
                    <td></td>
                    <td></td>
                    <td>KARMA</td>
                </tr>
                <tr>
                    <th>اللغة الفرنسية</th>
                    <th></th>
                    <td></td>
                    <td>French Language</td>
                </tr>
                <tr>
                    <th>الرباضيات</th>
                    <th></th>
                    <td></td>
                    <td>Mathematic</td>
                </tr>
                <tr>
                    <th>حاسوب</th>
                    <th></th>
                    <td></td>
                    <td>Computer</td>
                </tr>
            </tbody>
        </table>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="line-height: 4;">مدير المدرسه</th>

                    <th scope="col" style="width: 70%;">

                        <span style="float: right;color: #1F497D;"> : التقدير العام </span>
                        <span style="float: left;padding: 19px 0px;color: #1F497D;">General appreciation: </span>

                    </th>

                </tr>
            </thead>
        </table>
        <p>تعتبر هذه الشهادة وثيقة غير رسمية*</p>
        <script>
            window.print();
        </script>
        <script src="{{ asset('public/js/') }}/bootstrap.bundle.js"></script>
</body>

</html>

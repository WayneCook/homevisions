<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>


    * {

    font-family: Arial, Helvetica, serif;
    color: #8e979f;
    }

    h1, h2, h3, h4 {
        color: #50789f;
    }

   h4 {

        margin: 0px;
    }
    p {
        margin:0px;
    }

    h2 {
        margin-top: 40px;
        margin-bottom: 40px;
    }


    </style>
    <title>Document</title>
</head>
<body>
<table width="100%">
    <tr>
        <td align="center">

                <table width="640px">
                    <tr>

                        <td align="center">
                            <img style="width: 200px;" src="{{ asset('images/vision_logo.png') }}" alt="">

                        <tr>
                            <td align="center">
                                <hr>
                                <h2>YOU HAVE A NEW MESSAGE</h2>
                            </td>
                        </tr>

                        <tr>
                            <td align="center">

                                <table width="640px">

                                    <tr>
                                        <td>
                                            <h4>Sender</h4>
                                            <p style="text-align: left">{{ $message_sent->name }}</p>
                                            <br>
                                            <br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h4>Email</h4>
                                            <p style="text-align: left">{{ $message_sent->email }}</p>
                                            <br>
                                            <br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h4>Phone</h4>
                                            <p style="text-align: left">{{ $message_sent->phone }}</p>
                                            <br>
                                            <br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h4>Message</h4>
                                            <p style="text-align: left">{{ $message_sent->message }}</p>
                                            <br>
                                            <br>
                                        </td>
                                    </tr>


                                </table>



                            </td>


                        </tr>




                        </td>

                    </tr>

                </table>

        </td>
    </tr>


</table>


</body>
</html>





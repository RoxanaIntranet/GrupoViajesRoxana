<!DOCTYPE html>
<html>
<head>
    <title>Cuenta Eliminada</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 10px 0;
        }

        .header h2 {
            color: #D52E27;
            font-size: 40px;
        }

        .header img {
            max-width: 150px;
            height: auto;
        }

        .content {
            margin-top: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }

        .content p {
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 12px 60px;
            font-size: 16px;
            color: #ffffff;
            background-color: #D52E27;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .header p {
            font-size: 20px;
            margin: 0 auto;
            font-weight: 600;
            color: #777777;
        }

        .two-columns {
            width: 100%;
        }
        .column {
            width: 50%;
            vertical-align: top;
            padding: 10px;
        }
        .column p {
            text-align: left;
            color: #000;
            font-size: 20px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #777777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://grupoviajesroxana.com/images/logo-correo.jpg" alt="Logo Viajes Roxana">
            <h2>¡Hola {{ $user->name }} !</h2>
            <p>Tu cuenta ha sido eliminada exitosamente.</p>
        </div>
        <div class="content">
            <table class="two-columns" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="column" style="background-color: #dbdbdb; padding: 0 20px;">
                        <p>Lamentamos que te vayas, pero respetamos tu decisión.</p>
                        <p>Si decides regresar, siempre serás bienvenido.</p>
                        <p>Gracias por confiar en nosotros.</p>
                        <p style="color:#D52E27; font-size: 20px; font-weight: 700;">Atentamente, El equipo de Viajes Roxana</p>                      
                    </td>
                    <td class="column">
                        <img style="margin:0 auto;" src="https://grupoviajesroxana.com/images/rox-mano.jpg" alt="Viajes Roxana">
                    </td>
                </tr>
            </table>
            <p style="text-align:center;">El equipo de <span>Viajes Roxana</span></p>
            <img src="https://grupoviajesroxana.com/images/ayuda-wtsp.png" alt="" width="300px">
        </div>
        <div class="footer">

            <p>Este es un correo electrónico automático, por favor no responda a este mensaje.</p>
        </div>
    </div>
</body>

</html>

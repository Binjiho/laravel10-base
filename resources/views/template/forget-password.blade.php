<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>APKASS 2026</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0;padding: 0;">
<table style="width:650px;max-width:650px;margin: 0 auto;padding:0;border:1px solid #ddd;border-collapse: collapse;border-spacing:0;box-sizing:border-box;letter-spacing: -0.02em;">
    <tbody>
    <tr>
        <td style="border-bottom: 1px solid #ddd;padding: 0;text-align: center;text-align: center;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 26px;color: #050505;">
            <img src="{{ env("APP_URL") }}/assets/image/mail/mail_header.png" alt="" style="display: inline-block;border:0 none;vertical-align: top;" />
        </td>
    </tr>
    <tr>
        <td style="padding: 30px 30px 90px;font-size: 16px;line-height: 1.7;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;box-sizing:border-box;">
            <table style="width: 100%;border-collapse: collapse;border-spacing: 0;">
                <tbody>
                <tr>
                    <th scope="col" style="text-align: left; padding-bottom: 30px;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 26px;font-weight: 400;line-height: 1.5;">
                        <strong style="font-weight: 700;">Please check your temporary password</strong>
                    </th>
                </tr>
                <tr>
                    <td scope="col" style="padding-bottom: 30px;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 16px;font-weight: 400;text-align: left;line-height: 1.7;">
                        Dear First name Last name. <br><br>
                        You can log in to the APKASS 2026 Korea & ICKAS 2026 website using the ID & Temporary Password below and modify your password on
                        Personal Information of My PAGE.
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 20px;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 16px;color: #444444;line-height: 1.5">
                        <table style="width: 100%;border-collapse: collapse;border-spacing: 0;">
                            <tbody>
                            <tr>
                                <th scope="row" style="width: 180px;padding: 10px 15px;background-color: #f4f4f4;border-top: 1px solid #dddddd;border-bottom: 1px solid #dddddd;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 16px;font-weight: 700;color: #000000;line-height: 1.3;text-align: left;">
                                    *ID (Email Address)
                                </th>
                                <td style="width: 470px;padding: 10px 15px;border-top: 1px solid #dddddd;border-bottom: 1px solid #dddddd;border-left: 1px solid #dddddd;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 16px;color: #444444;line-height: 1.3">
                                    {{ $user->uid ?? '' }}
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width: 180px;padding: 10px 15px;background-color: #f4f4f4;border-top: 1px solid #dddddd;border-bottom: 1px solid #dddddd;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 16px;font-weight: 700;color: #000000;line-height: 1.3;text-align: left;">
                                    *Password
                                </th>
                                <td style="width: 470px;padding: 10px 15px;border-top: 1px solid #dddddd;border-bottom: 1px solid #dddddd;border-left: 1px solid #dddddd;font-family: 'Malgun Gothic', '맑은고딕', '돋움', 'dotum', 'Arial', sans-serif;font-size: 16px;color: #444444;line-height: 1.3">
                                    {{ $tempPassword ?? '' }}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 50px;text-align: center;">
                        <a href="{{ env("APP_URL") }}/main" target="_blank"><img src="{{ env("APP_URL") }}/assets/image/mail/btn_mail_home.png" alt="홈페이지 바로가기"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <img src="{{ env("APP_URL") }}/assets/image/mail/mail_footer.png" alt="" style="display: inline-block;border:0 none;vertical-align: top;" />
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
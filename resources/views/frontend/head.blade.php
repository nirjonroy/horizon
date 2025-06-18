<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Imad_hajj">
  <meta name="google-site-verification" content="wAw4hUVvSKTBeG8hb1WH9Gl37n2wS_BtK5vxVHzhVMg" />
  @php
                $siteInfo = DB::table('site_information')->first();
            @endphp
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset($siteInfo->logo)}}" />
  @yield('seos')
  <title>@yield('title', 'Horizons Unlimited')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#001D42",
              red: "#ff0000",
            },
          },
        },
      };
    </script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <style>
      header {
        position: fixed;
        z-index: 1000;
        width: 100%;
        background-color: white;
        transition: background-color 0.3s ease;
      }

      header.scroll {
        background-color: rgb(255, 243, 243);
      }
    </style>
    <style>
      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6ff;
        min-width: 250px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1000;
        border-radius: 5px;
      }

      .dropdown:hover .dropdown-content {
        display: flex;
        flex-direction: column;
        gap: 10px;
      }
    </style>

{!!\App\Models\Script::value('google')!!}
{!!\App\Models\Script::value('facebook')!!}
  </head>

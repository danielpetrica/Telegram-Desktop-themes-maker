<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Telegram Theme Maker Complete version</title>


    <!--This PAge use the meshki template            -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meshki/1.4.2/meshki.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/meshki/1.4.2/meshki.min.js"></script>

  </head>
  <body>
      <div class="sidenav push">
        <!-- Note that javascript:void(0) stops your page from jumping to the top -->
          <a href="javascript:void(0)" class="sidenav-close-button" onclick="meshki.closeNav()">&times;</a>
          <a href="http://thememaker.site/">Home</a>
          <a href="https://github.com/danielpetrica/Telegram-Desktop-themes-maker">GitHub project</a>
          <a href="http://danielpetrica.pw/">About Me</a>
          <a href="https://t.me/thememaker">Telegram channel</a>
          <hr>
          <a href="javascript:void(0)" disabled>Share on:</a>
          <div class="share-links">
            <a href="https://www.facebook.com/sharer/sharer.php?u=http://thememaker.site/generator_exp" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://twitter.com/home?status=http://thememaker.site/generator_exp" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/share?url=http://thememaker.site/generator_exp" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href="https://telegram.me/share/url?url=http://thememaker.site/generator_exp&text=Telegram%20Theme%20Maker%20Complete%20Version!" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>

          </div>
            </div>


    <div class="content">
            <div class="nav">
             <ul>
                <li><a href="http://thememaker.site/">Homepage</a></li>
                <li><a href="http://thememaker.site/generator">Basic Generator</a></li>
             </ul>
           </div>


     <div class="container">
                 <div class="row" style="padding-top: 60px; padding-bottom: 30px;">
                   <h1 class="text-center title">Telegram Theme Maker Site Expert Version</h1>
                   <h2 class="text-center">Thememaker.site The first telegram themes maker</h2>
                 </div>
    <h3>Select the colors from the forms down here </h3>
    <br><br>
    <div class="row">
    <table align="left">
            <form  method="post" action="action_expert.php">
              <tr>
                <th>  Select your theme name, please no space or special characters (use _ for spaces):</th>
                <th> <input  type="text"  name="name" value="type_a_name"><br>
                </th>
              </tr>
              <?php
              include 'theme_array_model.php';
              foreach ($arr_en as $key => $value) {
                    echo "\n<tr>\n<td>select your ".$value['name']."</td>\n<td><input  type=\"color\"  name=\"".$value['name']."\" value=\"".$value['color']."\"></td>\n <td>".$value['desc']."</td>\n</tr>\n";
              };
               ?>
          <input type="submit">
          <tr>
              <td>Please insert the Link to the background image (only .jpg please!) </td>
              <td><input type="link" name="img_input_image" value="https://static.pexels.com/photos/8703/sky-space-moon-outdoors.jpg"></td>
              <td>Use Only direct links to .jpg images. Other formats will corupt your theme!</td>
          </tr>
        <tr>
          <td>To <b>Create </b> your theme with the above colors:
          </td>
          <td> <input id="submit" type="submit">
          </td>
        </tr>
      </tbody>
          </table>
          </div>
        </div>

        <footer class="compact">
                <div class="row">
                  <div class="twelve col">
                    <p>
                      ©ThemeMaker.site 2017 <br>
                      This site has been created by <a href="http://danielpetrica.pw">Andrei-Daniel Petrica</a>, and it's based on his open source project:<a href="https://github.com/danielpetrica/Telegram-Desktop-themes-maker">Github Telegram Desktop Themes makers</a>
                    </p>
                  </div>
                </div>
              </footer>
              </div>




        <script>
                    (adsbygoogle = window.adsbygoogle || []).push({
                      google_ad_client: "ca-pub-1058605370784755",
                      enable_page_level_ads: true
                    });
                  </script>
  </body>
</html>

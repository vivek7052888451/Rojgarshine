@extends('frontend.app')
  <link rel="stylesheet" href="{{ asset('frontend/css/coursedetails.css')}}" />

@section('content')
   <section>
    <div class="container-fluid pl-0 pr-0" style="overflow:hidden;">
      <div class="row">
        <div class="col-md-12">
          <div class="banner_img">
            <div class="banner_img_overlay">
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xs-12">
                  <div class="banner_container">
                    <div class="banner_home">
                      <h5 style="color:white;">Home&emsp;<i class="fa fa-angle-double-right"
                          aria-hidden="true"></i><span style="color:red; font-weight:bold;">Rojgarshine Training
                          Institute in
                          Noida</span></h5>
                    </div>
                    <div class="banner_heading mt-4">
                      <h3 style="color:white;">Rojgarshine Training Institute in Noida</h3>
                    </div>
                    <div class="starrt">
                      <span class="rt">BEST
                        SELLER</span>
                      <h5 class="rtus"><span class="fa
                                                                    fa-star"></span>
                        <span class="fa
                                                                    fa-star"></span>
                        <span class="fa
                                                                    fa-star"></span>
                        <span class="fa
                                                                    fa-star"></span>
                        <span class="fa
                                                                    fa-star"></span>
                      </h5>
                      <span class="rttitle" style="color:white;">500
                        Ratings (5.0)</span>
                    </div>
                    <div class="banner_paragraph">
                      <p>Learn Python Training in Noida from Python Experts. Build your Career in
                        Python Programming. It’s a Right time to learn
                        Python Course from Basic to Advanced level with Placements. Python
                        Programmers are some of the highest Paid in the
                        industry, with average Salaries over $100000. This Python Certification
                        Training will help you to get a valid lifetime
                        industry-recognized Credential and become a best Python Developer!</p>
                    </div>
                    <div><button type="button" class="placement_report"><i class="fa fa-video-camera"></i>&emsp;<a
                          href="#" style="color:black;">Placement
                          Report</a></button>&emsp;&emsp;&emsp;<button type="button" class="demo_class"><i
                          class="fa fa-laptop"></i>&emsp;<a href="#" style="color:black;">Free Demo
                          Class</a></button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xs-12 mb-5">
                  <div class="picture_container">
                    <img src="images/book.png" class="banner_picture">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner ends
                                ============================ -->


  <div class="rs-courses-details pt-100 pb-70 mt-5">
    <div class="container">
      <div class="row mb-30">
        <div class="col-lg-8 col-md-12">
          <div class="detail-img">
            <img src="images/SEO-Training-in-Bismilsoft.jpg" alt="Courses Images" style="max-height:320px;width:100%">
          </div>
          <div class="row">
            <div class="col-md-8">
              <ul class="course-meta-style requirements-list">
                <li class="author">
                  <div class="image">
                    <img src="images/seo-training-bismilsoft-icon.jpg" width="60" alt="">
                  </div>
                  <div class="author-name">
                    <b>Search Engine Optimization (SEO)</b>
                    <p>Course</p>
                  </div>
                </li>

                <li>
                  5 Ratings
                  <div class="client-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="btn-area">
                <button type="button" class="btn
                    btn-primary" style="background: #063455;
                    color: #fff;
                    display: inline-block;
                    text-transform: uppercase;
                    padding: 10px 20px;" data-toggle="modal" data-target="#myModal">
                  Apply Now
                </button>
              </div>
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog" style="max-width:
                    550px;">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h3 class="card-title mt-3
                          text-center"></h3>
                      <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                      <div class="card bg-light">

                        <h4 class="card-title mt-3
                            text-center desc-title" style="margin-top:
                            12px;">Drop us a query</h4>
                        <form action="../admin/php/function.php?action=enquiry" class="drop_message" method="post">
                          <div class="form-group
                              input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                    fa-user"></i>
                              </span>
                            </div>
                            <input name="name" class="form-control" placeholder="Full
                                name" type="text" required="">
                          </div>
                          <!-- form-group// -->
                          <div class="form-group
                              input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                    fa-envelope"></i>
                              </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email
                                address" type="email" required="">
                          </div>
                          <!-- form-group// -->
                          <div class="form-group
                              input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                    fa-phone"></i>
                              </span>
                            </div>
                            <select class="custom-select" style="max-width:
                                200px;" name="number" required="">
                              <option value="+91" select="">+91
                                India (भारत)</option>
                              <option value="93">93
                                Afghanistan
                                (‫افغانستان‬‎)</option>
                              <option value="355">355
                                Albania
                                (Shqipëri)</option>
                              <option value="213">213
                                Algeria
                                (‫الجزائر‬‎)</option>
                              <option value="1">1
                                American
                                Samoa</option>
                              <option value="376">376
                                Andorra</option>
                              <option value="244">244
                                Angola</option>
                              <option value="1">1
                                Anguilla</option>
                              <option value="1">1
                                Antigua and
                                Barbuda</option>
                              <option value="54">54
                                Argentina</option>
                              <option value="374">374
                                Armenia
                                (Հայաստան)</option>
                              <option value="297">297
                                Aruba</option>
                              <option value="61">61
                                Australia</option>
                              <option value="43">43
                                Austria
                                (Österreich)</option>
                              <option value="994">994
                                Azerbaijan
                                (Azərbaycan)</option>
                              <option value="1">1
                                Bahamas</option>
                              <option value="973">973
                                Bahrain
                                (‫البحرين‬‎)</option>
                              <option value="880">880
                                Bangladesh
                                (বাংলাদেশ)</option>
                              <option value="1">1
                                Barbados</option>
                              <option value="375">375
                                Belarus
                                (Беларусь)</option>
                              <option value="32">32
                                Belgium
                                (België)</option>
                              <option value="501">501
                                Belize</option>
                              <option value="229">229
                                Benin
                                (Bénin)</option>
                              <option value="1">1
                                Bermuda</option>
                              <option value="975">975
                                Bhutan
                                (འབྲུག)</option>
                              <option value="591">591
                                Bolivia</option>
                              <option value="387">387
                                Bosnia and
                                Herzegovina
                                (Босна и
                                Херцеговина)</option>
                              <option value="267">267
                                Botswana</option>
                              <option value="55">55
                                Brazil
                                (Brasil)</option>
                              <option value="246">246
                                British
                                Indian Ocean
                                Territory</option>
                              <option value="1">1
                                British
                                Virgin
                                Islands</option>
                              <option value="673">673
                                Brunei</option>
                              <option value="359">359
                                Bulgaria
                                (България)</option>
                              <option value="226">226
                                Burkina Faso</option>
                              <option value="257">257
                                Burundi
                                (Uburundi)</option>
                              <option value="855">855
                                Cambodia
                                (កម្ពុជា)</option>
                              <option value="237">237
                                Cameroon
                                (Cameroun)</option>
                              <option value="1">1
                                Canada</option>
                              <option value="238">238
                                Cape Verde
                                (Kabu Verdi)</option>
                              <option value="599">599
                                Caribbean
                                Netherlands</option>
                              <option value="1">1
                                Cayman
                                Islands</option>
                              <option value="236">236
                                Central
                                African
                                Republic
                                (République
                                centrafricaine)</option>
                              <option value="235">235
                                Chad (Tchad)</option>
                              <option value="56">56
                                Chile</option>
                              <option value="86">86
                                China (中国)</option>
                              <option value="61">61
                                Christmas
                                Island</option>
                              <option value="61">61
                                Cocos
                                (Keeling)
                                Islands</option>
                              <option value="57">57
                                Colombia</option>
                              <option value="269">269
                                Comoros
                                (‫جزر
                                القمر‬‎)</option>
                              <option value="243">243
                                Congo (DRC)
                                (Jamhuri ya
                                Kidemokrasia
                                ya Kongo)</option>
                              <option value="242">242
                                Congo
                                (Republic)
                                (Congo-Brazzaville)</option>
                              <option value="682">682
                                Cook Islands</option>
                              <option value="506">506
                                Costa Rica</option>
                              <option value="225">225
                                Côte
                                d’Ivoire</option>
                              <option value="385">385
                                Croatia
                                (Hrvatska)</option>
                              <option value="53">53
                                Cuba</option>
                              <option value="599">599
                                Curaçao</option>
                              <option value="357">357
                                Cyprus
                                (Κύπρος)</option>
                              <option value="420">420
                                Czech
                                Republic
                                (Česká
                                republika)</option>
                              <option value="45">45
                                Denmark
                                (Danmark)</option>
                              <option value="253">253
                                Djibouti</option>
                              <option value="1">1
                                Dominica</option>
                              <option value="1">1
                                Dominican
                                Republic
                                (República
                                Dominicana)</option>
                              <option value="593">593
                                Ecuador</option>
                              <option value="20">20
                                Egypt
                                (‫مصر‬‎)</option>
                              <option value="503">503
                                El Salvador</option>
                              <option value="240">240
                                Equatorial
                                Guinea
                                (Guinea
                                Ecuatorial)</option>
                              <option value="291">291
                                Eritrea</option>
                              <option value="372">372
                                Estonia
                                (Eesti)</option>
                              <option value="251">251
                                Ethiopia</option>
                              <option value="500">500
                                Falkland
                                Islands
                                (Islas
                                Malvinas)</option>
                              <option value="298">298
                                Faroe
                                Islands
                                (Føroyar)</option>
                              <option value="679">679
                                Fiji</option>
                              <option value="358">358
                                Finland
                                (Suomi)</option>
                              <option value="33">33
                                France</option>
                              <option value="594">594
                                French
                                Guiana
                                (Guyane
                                française)</option>
                              <option value="689">689
                                French
                                Polynesia
                                (Polynésie
                                française)</option>
                              <option value="241">241
                                Gabon</option>
                              <option value="220">220
                                Gambia</option>
                              <option value="995">995
                                Georgia
                                (საქართველო)</option>
                              <option value="49">49
                                Germany
                                (Deutschland)</option>
                              <option value="233">233
                                Ghana
                                (Gaana)</option>
                              <option value="350">350
                                Gibraltar</option>
                              <option value="30">30
                                Greece
                                (Ελλάδα)</option>
                              <option value="299">299
                                Greenland
                                (Kalaallit
                                Nunaat)</option>
                              <option value="1">1
                                Grenada</option>
                              <option value="590">590
                                Guadeloupe</option>
                              <option value="1">1
                                Guam</option>
                              <option value="502">502
                                Guatemala</option>
                              <option value="44">44
                                Guernsey</option>
                              <option value="224">224
                                Guinea
                                (Guinée)</option>
                              <option value="245">245
                                Guinea-Bissau
                                (Guiné
                                Bissau)</option>
                              <option value="592">592
                                Guyana</option>
                              <option value="509">509
                                Haiti</option>
                              <option value="504">504
                                Honduras</option>
                              <option value="852">852
                                Hong Kong
                                (香港)</option>
                              <option value="36">36
                                Hungary
                                (Magyarország)</option>
                              <option value="354">354
                                Iceland
                                (Ísland)</option>
                              <option value="62">62
                                Indonesia</option>
                              <option value="98">98
                                Iran
                                (‫ایران‬‎)</option>
                              <option value="964">964
                                Iraq
                                (‫العراق‬‎)</option>
                              <option value="353">353
                                Ireland</option>
                              <option value="44">44
                                Isle of Man</option>
                              <option value="972">972
                                Israel
                                (‫ישראל‬‎)</option>
                              <option value="39">39
                                Italy
                                (Italia)</option>
                              <option value="1">1
                                Jamaica</option>
                              <option value="81">81
                                Japan (日本)</option>
                              <option value="44">44
                                Jersey</option>
                              <option value="962">962
                                Jordan
                                (‫الأردن‬‎)</option>
                              <option value="7">7
                                Kazakhstan
                                (Казахстан)</option>
                              <option value="254">254
                                Kenya</option>
                              <option value="686">686
                                Kiribati</option>
                              <option value="383">383
                                Kosovo</option>
                              <option value="965">965
                                Kuwait
                                (‫الكويت‬‎)</option>
                              <option value="996">996
                                Kyrgyzstan
                                (Кыргызстан)</option>
                              <option value="856">856
                                Laos (ລາວ)</option>
                              <option value="371">371
                                Latvia
                                (Latvija)</option>
                              <option value="961">961
                                Lebanon
                                (‫لبنان‬‎)</option>
                              <option value="266">266
                                Lesotho</option>
                              <option value="231">231
                                Liberia</option>
                              <option value="218">218
                                Libya
                                (‫ليبيا‬‎)</option>
                              <option value="423">423
                                Liechtenstein</option>
                              <option value="370">370
                                Lithuania
                                (Lietuva)</option>
                              <option value="352">352
                                Luxembourg</option>
                              <option value="853">853
                                Macau (澳門)</option>
                              <option value="389">389
                                Macedonia
                                (FYROM)
                                (Македонија)</option>
                              <option value="261">261
                                Madagascar
                                (Madagasikara)</option>
                              <option value="265">265
                                Malawi</option>
                              <option value="60">60
                                Malaysia</option>
                              <option value="960">960
                                Maldives</option>
                              <option value="223">223
                                Mali</option>
                              <option value="356">356
                                Malta</option>
                              <option value="692">692
                                Marshall
                                Islands</option>
                              <option value="596">596
                                Martinique</option>
                              <option value="222">222
                                Mauritania
                                (‫موريتانيا‬‎)</option>
                              <option value="230">230
                                Mauritius
                                (Moris)</option>
                              <option value="262">262
                                Mayotte</option>
                              <option value="52">52
                                Mexico
                                (México)</option>
                              <option value="691">691
                                Micronesia</option>
                              <option value="373">373
                                Moldova
                                (Republica
                                Moldova)</option>
                              <option value="377">377
                                Monaco</option>
                              <option value="976">976
                                Mongolia
                                (Монгол)</option>
                              <option value="382">382
                                Montenegro
                                (Crna Gora)</option>
                              <option value="1">1
                                Montserrat</option>
                              <option value="212">212
                                Morocco
                                (‫المغرب‬‎)</option>
                              <option value="258">258
                                Mozambique
                                (Moçambique)</option>
                              <option value="95">95
                                Myanmar
                                (Burma)
                                (မြန်မာ)</option>
                              <option value="264">264
                                Namibia
                                (Namibië)</option>
                              <option value="674">674
                                Nauru</option>
                              <option value="977">977
                                Nepal
                                (नेपाल)</option>
                              <option value="31">31
                                Netherlands
                                (Nederland)</option>
                              <option value="687">687
                                New
                                Caledonia
                                (Nouvelle-Calédonie)</option>
                              <option value="64">64
                                New Zealand</option>
                              <option value="505">505
                                Nicaragua</option>
                              <option value="227">227
                                Niger
                                (Nijar)</option>
                              <option value="234">234
                                Nigeria</option>
                              <option value="683">683
                                Niue</option>
                              <option value="672">672
                                Norfolk
                                Island</option>
                              <option value="850">850
                                North Korea
                                (조선 민주주의 인민
                                공화국)</option>
                              <option value="1">1
                                Northern
                                Mariana
                                Islands</option>
                              <option value="47">47
                                Norway
                                (Norge)</option>
                              <option value="968">968
                                Oman
                                (‫عُمان‬‎)</option>
                              <option value="92">92
                                Pakistan
                                (‫پاکستان‬‎)</option>
                              <option value="680">680
                                Palau</option>
                              <option value="970">970
                                Palestine
                                (‫فلسطين‬‎)</option>
                              <option value="507">507
                                Panama
                                (Panamá)</option>
                              <option value="675">675
                                Papua New
                                Guinea</option>
                              <option value="595">595
                                Paraguay</option>
                              <option value="51">51
                                Peru (Perú)</option>
                              <option value="63">63
                                Philippines</option>
                              <option value="48">48
                                Poland
                                (Polska)</option>
                              <option value="351">351
                                Portugal</option>
                              <option value="1">1
                                Puerto Rico</option>
                              <option value="974">974
                                Qatar
                                (‫قطر‬‎)</option>
                              <option value="262">262
                                Réunion (La
                                Réunion)</option>
                              <option value="40">40
                                Romania
                                (România)</option>
                              <option value="7">7
                                Russia
                                (Россия)</option>
                              <option value="250">250
                                Rwanda</option>
                              <option value="590">590
                                Saint
                                Barthélemy</option>
                              <option value="290">290
                                Saint Helena</option>
                              <option value="1">1
                                Saint Kitts
                                and Nevis</option>
                              <option value="1">1
                                Saint Lucia</option>
                              <option value="590">590
                                Saint Martin
                                (Saint-Martin
                                (partie
                                française))</option>
                              <option value="508">508
                                Saint Pierre
                                and Miquelon
                                (Saint-Pierre-et-Miquelon)</option>
                              <option value="1">1
                                Saint
                                Vincent and
                                the
                                Grenadines</option>
                              <option value="685">685
                                Samoa</option>
                              <option value="378">378
                                San Marino</option>
                              <option value="239">239
                                São Tomé and
                                Príncipe
                                (São Tomé e
                                Príncipe)</option>
                              <option value="966">966
                                Saudi Arabia
                                (‫المملكة
                                العربية
                                السعودية‬‎)</option>
                              <option value="221">221
                                Senegal
                                (Sénégal)</option>
                              <option value="381">381
                                Serbia
                                (Србија)</option>
                              <option value="248">248
                                Seychelles</option>
                              <option value="232">232
                                Sierra Leone</option>
                              <option value="65">65
                                Singapore</option>
                              <option value="1">1
                                Sint Maarten</option>
                              <option value="421">421
                                Slovakia
                                (Slovensko)</option>
                              <option value="386">386
                                Slovenia
                                (Slovenija)</option>
                              <option value="677">677
                                Solomon
                                Islands</option>
                              <option value="252">252
                                Somalia
                                (Soomaaliya)</option>
                              <option value="27">27
                                South Africa</option>
                              <option value="82">82
                                South Korea
                                (대한민국)</option>
                              <option value="211">211
                                South Sudan
                                (‫جنوب
                                السودان‬‎)</option>
                              <option value="34">34
                                Spain
                                (España)</option>
                              <option value="94">94
                                Sri Lanka
                                (ශ්‍රී
                                ලංකාව)</option>
                              <option value="249">249
                                Sudan
                                (‫السودان‬‎)</option>
                              <option value="597">597
                                Suriname</option>
                              <option value="47">47
                                Svalbard and
                                Jan Mayen</option>
                              <option value="268">268
                                Swaziland</option>
                              <option value="46">46
                                Sweden
                                (Sverige)</option>
                              <option value="41">41
                                Switzerland
                                (Schweiz)</option>
                              <option value="963">963
                                Syria
                                (‫سوريا‬‎)</option>
                              <option value="886">886
                                Taiwan (台灣)</option>
                              <option value="992">992
                                Tajikistan</option>
                              <option value="255">255
                                Tanzania</option>
                              <option value="66">66
                                Thailand
                                (ไทย)</option>
                              <option value="670">670
                                Timor-Leste</option>
                              <option value="228">228
                                Togo</option>
                              <option value="690">690
                                Tokelau</option>
                              <option value="676">676
                                Tonga</option>
                              <option value="1">1
                                Trinidad and
                                Tobago</option>
                              <option value="216">216
                                Tunisia
                                (‫تونس‬‎)</option>
                              <option value="90">90
                                Turkey
                                (Türkiye)</option>
                              <option value="993">993
                                Turkmenistan</option>
                              <option value="1">1
                                Turks and
                                Caicos
                                Islands</option>
                              <option value="688">688
                                Tuvalu</option>
                              <option value="1">1
                                U.S. Virgin
                                Islands</option>
                              <option value="256">256
                                Uganda</option>
                              <option value="380">380
                                Ukraine
                                (Україна)</option>
                              <option value="971">971
                                United Arab
                                Emirates
                                (‫الإمارات
                                العربية
                                المتحدة‬‎)</option>
                              <option value="44">44
                                United
                                Kingdom</option>
                              <option value="1">1
                                United
                                States</option>
                              <option value="598">598
                                Uruguay</option>
                              <option value="998">998
                                Uzbekistan
                                (Oʻzbekiston)</option>
                              <option value="678">678
                                Vanuatu</option>
                              <option value="39">39
                                Vatican City
                                (Città del
                                Vaticano)</option>
                              <option value="58">58
                                Venezuela</option>
                              <option value="84">84
                                Vietnam
                                (Việt Nam)</option>
                              <option value="681">681
                                Wallis and
                                Futuna
                                (Wallis-et-Futuna)</option>
                              <option value="212">212
                                Western
                                Sahara
                                (‫الصحراء
                                الغربية‬‎)</option>
                              <option value="967">967
                                Yemen
                                (‫اليمن‬‎)</option>
                              <option value="260">260
                                Zambia</option>
                              <option value="263">263
                                Zimbabwe</option>
                              <option value="358">358
                                Åland
                                Islands</option>
                            </select>
                            <input name="number1" class="form-control" placeholder="Phone
                                number" type="number" required="">
                          </div>
                          <!-- form-group// -->
                          <div class="form-group
                              input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                    fa-lock"></i>
                              </span>
                            </div>
                            <input class="form-control" placeholder="Enter
                                Course Name" type="text" required="" name="course">
                          </div>
                          <!-- form-group// -->
                          <div class="form-group
                              input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                    fa-building"></i>
                              </span>
                            </div>
                            <select class="form-control" required="" name="course_type">
                              <option selected="">Select
                                Training
                                Mode</option>
                              <option value="Classroom
                                  Training">Classroom
                                Training</option>
                              <option value="Online
                                  Training">Online
                                Training</option>
                            </select>
                          </div>
                          <!-- form-group end.// -->
                          <div class="form-group">
                            <textarea class="form-control" cols="4" rows="2" placeholder="Enter
                                Message Here.." required="" name="msg"></textarea>
                          </div>
                          What is 6 + 5 ? = <input name="captcha" type="text" required=""><input type="hidden"
                            name="session_captcha" value="11">
                          <!-- form-group// -->
                          <div class="form-group
                              mt-3">
                            <button type="submit" class="btn
                                btn-primary
                                btn-block" style="color:#ffffff;background-color:#063455;
                                height:50px;">SEND
                            </button>
                          </div>
                          <!-- form-group// -->
                        </form>

                      </div>
                      <!-- card.// -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="course-des-tabs">
                <div class="tab-btm">
                  <!-- Nav tabs -->
                  <div class="tabs-wrapper text-center">
                    <ul class="nav classic-tabs
                        tabs-cyan requirements-list" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link
                            waves-light active" data-toggle="tab" href="#panel51" role="tab">Description</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Tab panels -->
                <div class="tab-content card">
                  <!--Panel 1-->
                  <div class="tab-pane fade in active
                      show" id="panel51" role="tabpanel">
                    <br>
                    <p><strong>Bismilsoft</strong>
                      provides IT and Non-IT related
                      training course services to
                      college students and company
                      employees situated all across
                      Noida. Bismilsoft has intense
                      training programs for aspiring
                      job seekers and corporate to
                      help them further learn and
                      enhance their technical skill
                      sets. A dedicated team of
                      professional and experts
                      trainers, with their technical
                      expertise, can help students get
                      to a point of prowess which goes
                      unmatched by most colleges and
                      institutions.</p>
                    <p>The training is provided by
                      professionals and Corporate
                      faculties holding ample SEO
                      Training in Noida
                      experience, to guide students
                      with the work traditions of most
                      IT companies. Course training is
                      accompanied by live project
                      training and placement support
                      which makes the candidates ready
                      to be riveted in the industry.
                      Bismilsoft takes up the
                      liability of placing its entire
                      students at attractive packages
                      in companies all over India.</p>
                    <h4 class="desc-title" style="margin-top: 12px;">100%
                      Job Assistance</h4>
                    <p>We have collaboration with
                      companies to provide job support
                      to our students. Also, we give
                      an opportunity to work with our
                      agency &amp; with our clients.</p>
                    <h4 class="desc-title" style="margin-top: 12px;">Micro
                      Batch Size</h4>
                    <p>We have a micro-batch size of
                      just 7-10 students. Hence every
                      individual student gets full
                      interest from the trainer.</p>
                    <h4 class="desc-title" style="margin-top: 12px;">Chance
                      to Work on Live Projects</h4>
                    <p>Our focus is to provide 100%
                      practical knowledge to students
                      &amp; hence we also give chance
                      to students to work on real-time
                      client projects in an
                      organization with our parent
                      agency.</p>
                    <h4 class="desc-title" style="margin-top: 12px;">Flexible
                      Batch Timing</h4>
                    <p>We provide flexible batch timings
                      for the students as we
                      appreciate that every student
                      has a different level of
                      personal &amp; expert
                      commitments.</p>
                    <h4 class="desc-title" style="margin-top: 12px;">SEO
                      Training in Noida Course
                      Curriculum</h4>
                    <ul class="requirements-list">
                      <li>SEO Overview</li>
                      <li>Website Planning &amp;
                        Creation</li>
                      <li>Search Engine Optimization</li>
                      <li>Social Media Marketing</li>
                      <li>Online Reputation Management</li>
                      <li>Content Marketing</li>
                      <li>Mobile Web Marketing</li>
                      <li>Ecommerce Marketing</li>
                      <li>Online Display Advertising</li>
                      <li>Google Analytics</li>
                      <li>PPC Advertising Google
                        Adwords</li>
                      <li>Lead Generation for Business</li>
                      <li>Email Marketing</li>
                      <li>Affiliate Marketing</li>
                    </ul>
                    <h4 class="desc-title" style="margin-top: 12px;">Other
                      Related Courses:</h4>
                    <ul class="requirements-list">
                      <li>Search Engine Optimization
                        (SEO)&nbsp;Training in Noida</li>
                      <li>Social Media Marketing
                        (SMO)&nbsp;Training in Noida</li>
                      <li>Online Reputation Management
                        (ORM) Training in Noida</li>
                      <li>Content Marketing Training
                        in Noida</li>
                      <li>Ecommerce Marketing Training
                        in Noida</li>
                      <li>PPC Advertising Google
                        Adwords&nbsp;Training in
                        Noida</li>
                      <li>Email Marketing Training in
                        Noida</li>
                    </ul>
                    <h4 class="desc-title" style="margin-top: 12px;">Why
                      Choose of Bismilsoft
                      Institute for SEO&nbsp;Training
                      in Noida</h4>
                    <ul class="requirements-list">
                      <li>SEO Tutoring is particularly
                        aimed to aid the trainees so
                        as to offer the best SEO
                        time in a complete,
                        concrete, and interactive
                        manner.</li>
                      <li>SEO is totally designed to
                        beat the current IT market.</li>
                      <li>SEO trainers are
                        well-equipped with technical
                        skills, knowledge, and
                        expertise.</li>
                      <li>The working professional or
                        corporate clients can put up
                        their queries to our
                        corporate faculty.</li>
                      <li>24x7 lab facilities, the
                        trainees are totally free to
                        access the lab illimitably.</li>
                      <li>Smart SEO classes are
                        excitingly equipped with
                        digital pads, Wi-Fi
                        connectivity, live racks,
                        and projectors. SEO classes
                        at Noida are customizable as
                        per the candidate’s desired
                        timing.</li>
                      <li>Smart labs are equipped with
                        hi-fi equipment and high-end
                        tools.</li>
                    </ul>
                    <h4 class="desc-title" style="margin-top: 12px;">Placement
                      Process During SEO Training
                      in Noida</h4>
                    <ul class="requirements-list">
                      <li>Bismilsoft associated with
                        top companies like HCL,
                        Wipro, Dell, Birlasoft,
                        TechMahindra, TCS; IBM, etc.
                        make us capable to place our
                        students in top MNCs across
                        the globe.</li>
                      <li>HR team conduct grooming
                        sessions in grooming session
                        hr team focuses on
                        personality growth, how to
                        cooperate with interviewers,
                        how to speak English, how to
                        handle &amp; control anxiety
                        &amp; how to stand for your
                        point of view in front of
                        the interviewer.</li>
                      <li>After completion of 80%
                        training course content, we
                        will set up the interview
                        calls to students &amp;
                        organize them to face to
                        face interaction.</li>
                    </ul>
                  </div>
                  <!--/.Panel 1-->
                  <!--Panel 2-->


                  <div class="tab-pane fade" id="curriculum" role="tabpanel">
                  </div>
                  <!--/.Panel 2-->
                  <!--Panel 3-->
                  <div class="tab-pane fade" id="instructors" role="tabpanel">
                    <br>

                  </div>
                  <!--/.Panel 3-->
                  <!--Panel 4-->
                  <div class="tab-pane fade" id="review" role="tabpanel">
                  </div>
                  <!--/.Panel 4-->
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-12">
          <div class="sidebar-area">
            <div class="course-features-info">
              <h4 class="desc-title" style="margin-top:
                  12px;">Course Features</h4>
              <ul class="requirements-list">
                <li><i class="fa fa-files-o"></i> <span class="label">Lectures</span> <span class="value">10</span></li>
                <li><i class="fa fa-clock-o"></i> <span class="label">Duration</span> <span class="value">15
                    hours</span></li>
                <li><i class="fa fa-level-up"></i> <span class="label">Skill level</span>
                  <span class="value">10 Years of
                    Experience </span>
                </li>
                <li><i class="fa fa-language"></i> <span class="label">Language</span> <span class="value">English,
                    Hindi</span></li>
                <li><i class="fa fa-users"></i> <span class="label">Students</span> <span class="value">5</span></li>
                <li><i class="fa fa-check-square-o"></i>
                  <span class="label">Assessments</span>
                  <span class="value">10</span>
                </li>
              </ul>
            </div>
            <h3 class="title">Other Related Courses</h3>
            <div class="latest-courses">
              <div class="post-item">
                <div class="post-img">
                  <a href="online-reputation-management-orm-training-in-noida"><img
                      src="../admin/images/cover_image/ORM-Training-in-Bismilsoft.jpg" alt="" title="News image"></a>
                </div>
                <div class="post-desc">
                  <h4 class="desc-title" style="margin-top: 12px;"><a
                      href="online-reputation-management-orm-training-in-noida">Online
                      Reputation Management (ORM)
                      Training in Noida</a></h4>
                  <span class="duration">
                    <i class="fa fa-user" aria-hidden="true"></i> 10 Years
                    of Experience </span>
                </div>
              </div>
              <div class="post-item">
                <div class="post-img">
                  <a href="google-adwords-training-ppc-training-in-noida"><img src="../admin/images/cover_image/GOOGLE
                        AD website.jpg" alt="" title="News image"></a>
                </div>
                <div class="post-desc">
                  <h4 class="desc-title" style="margin-top: 12px;"><a
                      href="google-adwords-training-ppc-training-in-noida">Google
                      Adwords Training in Noida</a></h4>
                  <span class="duration">
                    <i class="fa fa-user" aria-hidden="true"></i> 10 Years
                    of Experience </span>
                </div>
              </div>
              <div class="post-item">
                <div class="post-img">
                  <a href="email-marketing-training-in-noida"><img
                      src="../admin/images/cover_image/Email-Marketing-Training-in-Bismilsoft.jpg" alt=""
                      title="News image"></a>
                </div>
                <div class="post-desc">
                  <h4 class="desc-title" style="margin-top: 12px;"><a href="email-marketing-training-in-noida">Email
                      Marketing Training Institute in
                      Noida</a></h4>
                  <span class="duration">
                    <i class="fa fa-user" aria-hidden="true"></i> 10 Years
                    of Experience </span>
                </div>
              </div>
              <div class="post-item">
                <div class="post-img">
                  <a href="smo-training-in-noida"><img src="../admin/images/cover_image/SMO-training-in-Bismilsoft.jpg"
                      alt="" title="News image"></a>
                </div>
                <div class="post-desc">
                  <h4 class="desc-title" style="margin-top: 12px;"><a href="smo-training-in-noida">SMO
                      Training Institute in Noida</a></h4>
                  <span class="duration">
                    <i class="fa fa-user" aria-hidden="true"></i> 10 Years
                    of Experience </span>
                </div>
              </div>

            </div>
            <div class="card bg-light">

              <h4 class="card-title mt-3 text-center
                  desc-title" style="margin-top: 12px;">Drop
                us a query</h4>

              <form action="../admin/php/function.php?action=enquiry" class="drop_message2" method="post">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i>
                    </span>
                  </div>
                  <input name="name" class="form-control" placeholder="Full name" type="text" required="">
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <input name="email" class="form-control" placeholder="Email address" type="email" required="">
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i>
                    </span>
                  </div>
                  <select class="custom-select" style="max-width: 200px;" name="number" required="">
                    <option value="+91" select="">+91
                      India (भारत)</option>
                    <option value="93">93 Afghanistan
                      (‫افغانستان‬‎)</option>
                    <option value="355">355 Albania
                      (Shqipëri)</option>
                    <option value="213">213 Algeria
                      (‫الجزائر‬‎)</option>
                    <option value="1">1 American Samoa</option>
                    <option value="376">376 Andorra</option>
                    <option value="244">244 Angola</option>
                    <option value="1">1 Anguilla</option>
                    <option value="1">1 Antigua and
                      Barbuda</option>
                    <option value="54">54 Argentina</option>
                    <option value="374">374 Armenia
                      (Հայաստան)</option>
                    <option value="297">297 Aruba</option>
                    <option value="61">61 Australia</option>
                    <option value="43">43 Austria
                      (Österreich)</option>
                    <option value="994">994 Azerbaijan
                      (Azərbaycan)</option>
                    <option value="1">1 Bahamas</option>
                    <option value="973">973 Bahrain
                      (‫البحرين‬‎)</option>
                    <option value="880">880 Bangladesh
                      (বাংলাদেশ)</option>
                    <option value="1">1 Barbados</option>
                    <option value="375">375 Belarus
                      (Беларусь)</option>
                    <option value="32">32 Belgium
                      (België)</option>
                    <option value="501">501 Belize</option>
                    <option value="229">229 Benin
                      (Bénin)</option>
                    <option value="1">1 Bermuda</option>
                    <option value="975">975 Bhutan
                      (འབྲུག)</option>
                    <option value="591">591 Bolivia</option>
                    <option value="387">387 Bosnia and
                      Herzegovina (Босна и
                      Херцеговина)</option>
                    <option value="267">267 Botswana</option>
                    <option value="55">55 Brazil
                      (Brasil)</option>
                    <option value="246">246 British
                      Indian Ocean Territory</option>
                    <option value="1">1 British Virgin
                      Islands</option>
                    <option value="673">673 Brunei</option>
                    <option value="359">359 Bulgaria
                      (България)</option>
                    <option value="226">226 Burkina Faso</option>
                    <option value="257">257 Burundi
                      (Uburundi)</option>
                    <option value="855">855 Cambodia
                      (កម្ពុជា)</option>
                    <option value="237">237 Cameroon
                      (Cameroun)</option>
                    <option value="1">1 Canada</option>
                    <option value="238">238 Cape Verde
                      (Kabu Verdi)</option>
                    <option value="599">599 Caribbean
                      Netherlands</option>
                    <option value="1">1 Cayman Islands</option>
                    <option value="236">236 Central
                      African Republic (République
                      centrafricaine)</option>
                    <option value="235">235 Chad (Tchad)</option>
                    <option value="56">56 Chile</option>
                    <option value="86">86 China (中国)</option>
                    <option value="61">61 Christmas
                      Island</option>
                    <option value="61">61 Cocos
                      (Keeling) Islands</option>
                    <option value="57">57 Colombia</option>
                    <option value="269">269 Comoros
                      (‫جزر القمر‬‎)</option>
                    <option value="243">243 Congo (DRC)
                      (Jamhuri ya Kidemokrasia ya
                      Kongo)</option>
                    <option value="242">242 Congo
                      (Republic) (Congo-Brazzaville)</option>
                    <option value="682">682 Cook Islands</option>
                    <option value="506">506 Costa Rica</option>
                    <option value="225">225 Côte
                      d’Ivoire</option>
                    <option value="385">385 Croatia
                      (Hrvatska)</option>
                    <option value="53">53 Cuba</option>
                    <option value="599">599 Curaçao</option>
                    <option value="357">357 Cyprus
                      (Κύπρος)</option>
                    <option value="420">420 Czech
                      Republic (Česká republika)</option>
                    <option value="45">45 Denmark
                      (Danmark)</option>
                    <option value="253">253 Djibouti</option>
                    <option value="1">1 Dominica</option>
                    <option value="1">1 Dominican
                      Republic (República Dominicana)</option>
                    <option value="593">593 Ecuador</option>
                    <option value="20">20 Egypt (‫مصر‬‎)</option>
                    <option value="503">503 El Salvador</option>
                    <option value="240">240 Equatorial
                      Guinea (Guinea Ecuatorial)</option>
                    <option value="291">291 Eritrea</option>
                    <option value="372">372 Estonia
                      (Eesti)</option>
                    <option value="251">251 Ethiopia</option>
                    <option value="500">500 Falkland
                      Islands (Islas Malvinas)</option>
                    <option value="298">298 Faroe
                      Islands (Føroyar)</option>
                    <option value="679">679 Fiji</option>
                    <option value="358">358 Finland
                      (Suomi)</option>
                    <option value="33">33 France</option>
                    <option value="594">594 French
                      Guiana (Guyane française)</option>
                    <option value="689">689 French
                      Polynesia (Polynésie française)</option>
                    <option value="241">241 Gabon</option>
                    <option value="220">220 Gambia</option>
                    <option value="995">995 Georgia
                      (საქართველო)</option>
                    <option value="49">49 Germany
                      (Deutschland)</option>
                    <option value="233">233 Ghana
                      (Gaana)</option>
                    <option value="350">350 Gibraltar</option>
                    <option value="30">30 Greece
                      (Ελλάδα)</option>
                    <option value="299">299 Greenland
                      (Kalaallit Nunaat)</option>
                    <option value="1">1 Grenada</option>
                    <option value="590">590 Guadeloupe</option>
                    <option value="1">1 Guam</option>
                    <option value="502">502 Guatemala</option>
                    <option value="44">44 Guernsey</option>
                    <option value="224">224 Guinea
                      (Guinée)</option>
                    <option value="245">245
                      Guinea-Bissau (Guiné Bissau)</option>
                    <option value="592">592 Guyana</option>
                    <option value="509">509 Haiti</option>
                    <option value="504">504 Honduras</option>
                    <option value="852">852 Hong Kong
                      (香港)</option>
                    <option value="36">36 Hungary
                      (Magyarország)</option>
                    <option value="354">354 Iceland
                      (Ísland)</option>
                    <option value="62">62 Indonesia</option>
                    <option value="98">98 Iran
                      (‫ایران‬‎)</option>
                    <option value="964">964 Iraq
                      (‫العراق‬‎)</option>
                    <option value="353">353 Ireland</option>
                    <option value="44">44 Isle of Man</option>
                    <option value="972">972 Israel
                      (‫ישראל‬‎)</option>
                    <option value="39">39 Italy (Italia)</option>
                    <option value="1">1 Jamaica</option>
                    <option value="81">81 Japan (日本)</option>
                    <option value="44">44 Jersey</option>
                    <option value="962">962 Jordan
                      (‫الأردن‬‎)</option>
                    <option value="7">7 Kazakhstan
                      (Казахстан)</option>
                    <option value="254">254 Kenya</option>
                    <option value="686">686 Kiribati</option>
                    <option value="383">383 Kosovo</option>
                    <option value="965">965 Kuwait
                      (‫الكويت‬‎)</option>
                    <option value="996">996 Kyrgyzstan
                      (Кыргызстан)</option>
                    <option value="856">856 Laos (ລາວ)</option>
                    <option value="371">371 Latvia
                      (Latvija)</option>
                    <option value="961">961 Lebanon
                      (‫لبنان‬‎)</option>
                    <option value="266">266 Lesotho</option>
                    <option value="231">231 Liberia</option>
                    <option value="218">218 Libya
                      (‫ليبيا‬‎)</option>
                    <option value="423">423
                      Liechtenstein</option>
                    <option value="370">370 Lithuania
                      (Lietuva)</option>
                    <option value="352">352 Luxembourg</option>
                    <option value="853">853 Macau (澳門)</option>
                    <option value="389">389 Macedonia
                      (FYROM) (Македонија)</option>
                    <option value="261">261 Madagascar
                      (Madagasikara)</option>
                    <option value="265">265 Malawi</option>
                    <option value="60">60 Malaysia</option>
                    <option value="960">960 Maldives</option>
                    <option value="223">223 Mali</option>
                    <option value="356">356 Malta</option>
                    <option value="692">692 Marshall
                      Islands</option>
                    <option value="596">596 Martinique</option>
                    <option value="222">222 Mauritania
                      (‫موريتانيا‬‎)</option>
                    <option value="230">230 Mauritius
                      (Moris)</option>
                    <option value="262">262 Mayotte</option>
                    <option value="52">52 Mexico
                      (México)</option>
                    <option value="691">691 Micronesia</option>
                    <option value="373">373 Moldova
                      (Republica Moldova)</option>
                    <option value="377">377 Monaco</option>
                    <option value="976">976 Mongolia
                      (Монгол)</option>
                    <option value="382">382 Montenegro
                      (Crna Gora)</option>
                    <option value="1">1 Montserrat</option>
                    <option value="212">212 Morocco
                      (‫المغرب‬‎)</option>
                    <option value="258">258 Mozambique
                      (Moçambique)</option>
                    <option value="95">95 Myanmar
                      (Burma) (မြန်မာ)</option>
                    <option value="264">264 Namibia
                      (Namibië)</option>
                    <option value="674">674 Nauru</option>
                    <option value="977">977 Nepal
                      (नेपाल)</option>
                    <option value="31">31 Netherlands
                      (Nederland)</option>
                    <option value="687">687 New
                      Caledonia (Nouvelle-Calédonie)</option>
                    <option value="64">64 New Zealand</option>
                    <option value="505">505 Nicaragua</option>
                    <option value="227">227 Niger
                      (Nijar)</option>
                    <option value="234">234 Nigeria</option>
                    <option value="683">683 Niue</option>
                    <option value="672">672 Norfolk
                      Island</option>
                    <option value="850">850 North Korea
                      (조선 민주주의 인민 공화국)</option>
                    <option value="1">1 Northern Mariana
                      Islands</option>
                    <option value="47">47 Norway (Norge)</option>
                    <option value="968">968 Oman
                      (‫عُمان‬‎)</option>
                    <option value="92">92 Pakistan
                      (‫پاکستان‬‎)</option>
                    <option value="680">680 Palau</option>
                    <option value="970">970 Palestine
                      (‫فلسطين‬‎)</option>
                    <option value="507">507 Panama
                      (Panamá)</option>
                    <option value="675">675 Papua New
                      Guinea</option>
                    <option value="595">595 Paraguay</option>
                    <option value="51">51 Peru (Perú)</option>
                    <option value="63">63 Philippines</option>
                    <option value="48">48 Poland
                      (Polska)</option>
                    <option value="351">351 Portugal</option>
                    <option value="1">1 Puerto Rico</option>
                    <option value="974">974 Qatar
                      (‫قطر‬‎)</option>
                    <option value="262">262 Réunion (La
                      Réunion)</option>
                    <option value="40">40 Romania
                      (România)</option>
                    <option value="7">7 Russia (Россия)</option>
                    <option value="250">250 Rwanda</option>
                    <option value="590">590 Saint
                      Barthélemy</option>
                    <option value="290">290 Saint Helena</option>
                    <option value="1">1 Saint Kitts and
                      Nevis</option>
                    <option value="1">1 Saint Lucia</option>
                    <option value="590">590 Saint Martin
                      (Saint-Martin (partie
                      française))</option>
                    <option value="508">508 Saint Pierre
                      and Miquelon
                      (Saint-Pierre-et-Miquelon)</option>
                    <option value="1">1 Saint Vincent
                      and the Grenadines</option>
                    <option value="685">685 Samoa</option>
                    <option value="378">378 San Marino</option>
                    <option value="239">239 São Tomé and
                      Príncipe (São Tomé e Príncipe)</option>
                    <option value="966">966 Saudi Arabia
                      (‫المملكة العربية السعودية‬‎)</option>
                    <option value="221">221 Senegal
                      (Sénégal)</option>
                    <option value="381">381 Serbia
                      (Србија)</option>
                    <option value="248">248 Seychelles</option>
                    <option value="232">232 Sierra Leone</option>
                    <option value="65">65 Singapore</option>
                    <option value="1">1 Sint Maarten</option>
                    <option value="421">421 Slovakia
                      (Slovensko)</option>
                    <option value="386">386 Slovenia
                      (Slovenija)</option>
                    <option value="677">677 Solomon
                      Islands</option>
                    <option value="252">252 Somalia
                      (Soomaaliya)</option>
                    <option value="27">27 South Africa</option>
                    <option value="82">82 South Korea
                      (대한민국)</option>
                    <option value="211">211 South Sudan
                      (‫جنوب السودان‬‎)</option>
                    <option value="34">34 Spain (España)</option>
                    <option value="94">94 Sri Lanka
                      (ශ්‍රී ලංකාව)</option>
                    <option value="249">249 Sudan
                      (‫السودان‬‎)</option>
                    <option value="597">597 Suriname</option>
                    <option value="47">47 Svalbard and
                      Jan Mayen</option>
                    <option value="268">268 Swaziland</option>
                    <option value="46">46 Sweden
                      (Sverige)</option>
                    <option value="41">41 Switzerland
                      (Schweiz)</option>
                    <option value="963">963 Syria
                      (‫سوريا‬‎)</option>
                    <option value="886">886 Taiwan (台灣)</option>
                    <option value="992">992 Tajikistan</option>
                    <option value="255">255 Tanzania</option>
                    <option value="66">66 Thailand (ไทย)</option>
                    <option value="670">670 Timor-Leste</option>
                    <option value="228">228 Togo</option>
                    <option value="690">690 Tokelau</option>
                    <option value="676">676 Tonga</option>
                    <option value="1">1 Trinidad and
                      Tobago</option>
                    <option value="216">216 Tunisia
                      (‫تونس‬‎)</option>
                    <option value="90">90 Turkey
                      (Türkiye)</option>
                    <option value="993">993 Turkmenistan</option>
                    <option value="1">1 Turks and Caicos
                      Islands</option>
                    <option value="688">688 Tuvalu</option>
                    <option value="1">1 U.S. Virgin
                      Islands</option>
                    <option value="256">256 Uganda</option>
                    <option value="380">380 Ukraine
                      (Україна)</option>
                    <option value="971">971 United Arab
                      Emirates (‫الإمارات العربية
                      المتحدة‬‎)</option>
                    <option value="44">44 United Kingdom</option>
                    <option value="1">1 United States</option>
                    <option value="598">598 Uruguay</option>
                    <option value="998">998 Uzbekistan
                      (Oʻzbekiston)</option>
                    <option value="678">678 Vanuatu</option>
                    <option value="39">39 Vatican City
                      (Città del Vaticano)</option>
                    <option value="58">58 Venezuela</option>
                    <option value="84">84 Vietnam (Việt
                      Nam)</option>
                    <option value="681">681 Wallis and
                      Futuna (Wallis-et-Futuna)</option>
                    <option value="212">212 Western
                      Sahara (‫الصحراء الغربية‬‎)</option>
                    <option value="967">967 Yemen
                      (‫اليمن‬‎)</option>
                    <option value="260">260 Zambia</option>
                    <option value="263">263 Zimbabwe</option>
                    <option value="358">358 Åland
                      Islands</option>
                  </select>
                  <input name="number1" class="form-control" placeholder="Phone numbefr" type="number" required="">
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i>
                    </span>
                  </div>
                  <input class="form-control" placeholder="Enter Course Name" type="text" required="" name="course">
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i>
                    </span>
                  </div>
                  <select class="form-control" required="" name="course_type">
                    <option selected="">Select Training
                      Mode</option>
                    <option value="Classroom Training">Classroom
                      Training</option>
                    <option value="Online Training">Online
                      Training</option>

                  </select>
                </div>
                <!-- form-group end.// -->

                <div class="form-group">

                  <textarea class="form-control" cols="4" rows="4" placeholder="Enter Message
                      Here.." required="" name="msg"></textarea>
                </div>
                What is 2 + 8 ? = <input name="captcha" type="text" required=""><input type="hidden"
                  name="session_captcha" value="10">
                <!-- form-group// -->
                <div class="form-group mt-3">
                  <button type="submit" id="smt2" class="btn btn-primary btn-block"
                    style="color:#ffffff;background-color:#063455;;height:50px;">SEND
                  </button>
                </div>
                <!-- form-group// -->

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
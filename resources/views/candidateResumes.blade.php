@extends('layouts.visa24.app')
@section('content')
    <div id="content">
        <div class="mission block block-pd-sm block-bg-noise">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- Candidate Resume start -->
                <div class="services block block-bg-gradient block-border-bottom ">

                    <div class="col-md-12">
                        <form action="#" method="get" class="form-horizontal" >
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="text-uppercase text-default" style="font-size:20px;"><strong>Find Candidates</strong></span>
                                </div>
                                <div class="col-md-3">
                                    <input name="search_key" id="search_key" value="" class="form-control " placeholder="Name, Job Title, Budget etc" aria-invalid="false" type="text">
                                    <span class="text-default" style="font-size:10px; color:#999;">Name , Job Title, etc</span>
                                </div>
                                <div class="col-md-3">
                                    <input name="search_location" id="search_location" value="" autocomplete="off" class="form-control " placeholder="City, Country" aria-invalid="false" type="text"  >
                                    <span class="text-default" style="font-size:10px; color:#999;">City, Country, etc</span>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="validate btn btn-danger btn-block">
                                        FIND
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
				            	<span class="col-md-12 text-default">
				            		<span class="glyphicon glyphicon glyphicon-search text-danger"></span> Refine Your Search
				            	</span>
                                <br /><br />
                                <span class="col-md-12 text-default">Search By:</span>

                                <form action="" method="post" class="form-validate form-horizontal" >
					              <span class="col-md-12 text-default" style="padding-bottom:5px; padding-top:5px;">
					               <input name="result_key" id="result_key" value="" class="form-control " placeholder="Candidates Result" aria-invalid="false" type="text">
					              </span>

                                    <span class="col-md-12 text-default" style="padding-bottom:5px; padding-top:5px;">
					               <input name="age_key" id="age_key" value="" class="form-control " placeholder="Candidates Age" aria-invalid="false" type="text">
					              </span>

                                    <span class="col-md-12 text-default border-bottom" style="padding-bottom:5px; padding-top:5px;">
					               &nbsp;
					              </span>


                                    <span class="col-md-12 text-default"><br />Filter By:</span>

                                    <span class="col-md-12 text-default" style="padding-bottom:5px; padding-top:5px;">
					               <select id="visatype_key" name="visatype_key" class="form-control " >
					                    <option value="">Visa Type</option>
                                    	<option value="STUDENT VISA"  >STUDENT VISA</option>
                                    	<option value="BUSINESS VISA"  >BUSINESS VISA</option>
                                    	<option value="JOB VISA"  >JOB VISA</option>
                                    	<option value="TOURIST VISA"  >TOURIST VISA</option>
                                    	<option value="VISIT VISA"  >VISIT VISA</option>
                                    	<option value="SPOUSE VISA"  >SPOUSE VISA</option>
                                    	<option value="EMIGRATION VISA"  >EMIGRATION VISA</option>
                                    	<option value="MIGRATION"  >MIGRATION</option>
                                    	<option value="SECOND HOME"  >SECOND HOME</option>
                                    	<option value="STUDENT WORK"  >STUDENT WORK</option>
                                    	<option value="TEMP RESIDENCE"  >TEMP RESIDENCE</option>
                                    	<option value="J1"  >J1</option>
                                    	<option value="H1B"  >H1B</option>
                                    	<option value="H2B"  >H2B</option>
                                    	<option value="FREE VISA"  >FREE VISA</option>
                                    	<option value="HAJJ VISA"  >HAJJ VISA</option>
                                    	<option value="Work Permit Visa"  >Work Permit Visa</option>
                                    	<option value="PACKAGE TOUR"  >PACKAGE TOUR</option>
					                </select>
					              </span>

                                    <span class="col-md-12 text-default " style="padding-bottom:5px; padding-top:5px;">
					               <select id="country_key" name="country_key" class="form-control " >
					                    <option value="">Country</option>
	                                	<option value="Afghanistan"  >Afghanistan</option>
	                                	<option value="Albania"  >Albania</option>
	                                	<option value="Algeria"  >Algeria</option>
	                                	<option value="American Samoa"  >American Samoa</option>
	                                	<option value="Angola"  >Angola</option>
	                                	<option value="Anguilla"  >Anguilla</option>
	                                	<option value="Antartica"  >Antartica</option>
	                                	<option value="Antigua and Barbuda"  >Antigua and Barbuda</option>
	                                	<option value="Argentina"  >Argentina</option>
	                                	<option value="Armenia"  >Armenia</option>
	                                	<option value="Aruba"  >Aruba</option>
	                                	<option value="Ashmore and Cartier Island"  >Ashmore and Cartier Island</option>
	                                	<option value="Australia"  >Australia</option>
	                                	<option value="Austria"  >Austria</option>
	                                	<option value="Azerbaijan"  >Azerbaijan</option>
	                                	<option value="Bahamas"  >Bahamas</option>
	                                	<option value="Bahrain"  >Bahrain</option>
	                                	<option value="Bangladesh"  >Bangladesh</option>
	                                	<option value="Barbados"  >Barbados</option>
	                                	<option value="Belarus"  >Belarus</option>
	                                	<option value="Belgium"  >Belgium</option>
	                                	<option value="Belize"  >Belize</option>
	                                	<option value="Benin"  >Benin</option>
	                                	<option value="Bermuda"  >Bermuda</option>
	                                	<option value="Bhutan"  >Bhutan</option>
	                                	<option value="Bolivia"  >Bolivia</option>
	                                	<option value="Bosnia and Herzegovina"  >Bosnia and Herzegovina</option>
	                                	<option value="Botswana"  >Botswana</option>
	                                	<option value="Brazil"  >Brazil</option>
	                                	<option value="British Virgin Islands"  >British Virgin Islands</option>
	                                	<option value="Brunei"  >Brunei</option>
	                                	<option value="Bulgaria"  >Bulgaria</option>
	                                	<option value="Burkina Faso"  >Burkina Faso</option>
	                                	<option value="Burma"  >Burma</option>
	                                	<option value="Burundi"  >Burundi</option>
	                                	<option value="Cambodia"  >Cambodia</option>
	                                	<option value="Cameroon"  >Cameroon</option>
	                                	<option value="Canada"  >Canada</option>
	                                	<option value="Cape Verde"  >Cape Verde</option>
	                                	<option value="Cayman Islands"  >Cayman Islands</option>
	                                	<option value="Central African Republic"  >Central African Republic</option>
	                                	<option value="Chad"  >Chad</option>
	                                	<option value="Chile"  >Chile</option>
	                                	<option value="China"  >China</option>
	                                	<option value="Christmas Island"  >Christmas Island</option>
	                                	<option value="Clipperton Island"  >Clipperton Island</option>
	                                	<option value="Cocos (Keeling) Islands"  >Cocos (Keeling) Islands</option>
	                                	<option value="Colombia"  >Colombia</option>
	                                	<option value="Comoros"  >Comoros</option>
	                                	<option value="Congo, Democratic Republic of the"  >Congo, Democratic Republic of the</option>
	                                	<option value="Congo, Republic of the"  >Congo, Republic of the</option>
	                                	<option value="Cook Islands"  >Cook Islands</option>
	                                	<option value="Costa Rica"  >Costa Rica</option>
	                                	<option value="Cote d'voire"  >Cote d'voire</option>
	                                	<option value="Croatia"  >Croatia</option>
	                                	<option value="Cuba"  >Cuba</option>
	                                	<option value="Cyprus"  >Cyprus</option>
	                                	<option value="Czeck Republic"  >Czeck Republic</option>
	                                	<option value="Denmark"  >Denmark</option>
	                                	<option value="Djibouti"  >Djibouti</option>
	                                	<option value="Dominica"  >Dominica</option>
	                                	<option value="Dominican Republic"  >Dominican Republic</option>
	                                	<option value="Ecuador"  >Ecuador</option>
	                                	<option value="Egypt"  >Egypt</option>
	                                	<option value="El Salvador"  >El Salvador</option>
	                                	<option value="Equatorial Guinea"  >Equatorial Guinea</option>
	                                	<option value="Eritrea"  >Eritrea</option>
	                                	<option value="Estonia"  >Estonia</option>
	                                	<option value="Ethiopia"  >Ethiopia</option>
	                                	<option value="Europa Island"  >Europa Island</option>
	                                	<option value="Falkland Islands (Islas Malvinas)"  >Falkland Islands (Islas Malvinas)</option>
	                                	<option value="Faroe Islands"  >Faroe Islands</option>
	                                	<option value="Fiji"  >Fiji</option>
	                                	<option value="Finland"  >Finland</option>
	                                	<option value="France"  >France</option>
	                                	<option value="French Guiana"  >French Guiana</option>
	                                	<option value="French Polynesia"  >French Polynesia</option>
	                                	<option value="French Southern and Antarctic Lands"  >French Southern and Antarctic Lands</option>
	                                	<option value="Gabon"  >Gabon</option>
	                                	<option value="Gambia, The"  >Gambia, The</option>
	                                	<option value="Gaza Strip"  >Gaza Strip</option>
	                                	<option value="Georgia"  >Georgia</option>
	                                	<option value="Germany"  >Germany</option>
	                                	<option value="Ghana"  >Ghana</option>
	                                	<option value="Gibraltar"  >Gibraltar</option>
	                                	<option value="Glorioso Islands"  >Glorioso Islands</option>
	                                	<option value="Greece"  >Greece</option>
	                                	<option value="Greenland"  >Greenland</option>
	                                	<option value="Grenada"  >Grenada</option>
	                                	<option value="Guadeloupe"  >Guadeloupe</option>
	                                	<option value="Guam"  >Guam</option>
	                                	<option value="Guatemala"  >Guatemala</option>
	                                	<option value="Guernsey"  >Guernsey</option>
	                                	<option value="Guinea"  >Guinea</option>
	                                	<option value="Guinea-Bissau"  >Guinea-Bissau</option>
	                                	<option value="Guyana"  >Guyana</option>
	                                	<option value="Haiti"  >Haiti</option>
	                                	<option value="Heard Island and McDonald Islands"  >Heard Island and McDonald Islands</option>
	                                	<option value="Holy See (Vatican City)"  >Holy See (Vatican City)</option>
	                                	<option value="Honduras"  >Honduras</option>
	                                	<option value="Hong Kong"  >Hong Kong</option>
	                                	<option value="Howland Island"  >Howland Island</option>
	                                	<option value="Hungary"  >Hungary</option>
	                                	<option value="Iceland"  >Iceland</option>
	                                	<option value="India"  >India</option>
	                                	<option value="Indonesia"  >Indonesia</option>
	                                	<option value="Iran"  >Iran</option>
	                                	<option value="Iraq"  >Iraq</option>
	                                	<option value="Ireland"  >Ireland</option>
	                                	<option value="Ireland, Northern"  >Ireland, Northern</option>
	                                	<option value="Israel"  >Israel</option>
	                                	<option value="Italy"  >Italy</option>
	                                	<option value="Jamaica"  >Jamaica</option>
	                                	<option value="Jan Mayen"  >Jan Mayen</option>
	                                	<option value="Japan"  >Japan</option>
	                                	<option value="Jarvis Island"  >Jarvis Island</option>
	                                	<option value="Jersey"  >Jersey</option>
	                                	<option value="Johnston Atoll"  >Johnston Atoll</option>
	                                	<option value="Jordan"  >Jordan</option>
	                                	<option value="Juan de Nova Island"  >Juan de Nova Island</option>
	                                	<option value="Kazakhstan"  >Kazakhstan</option>
	                                	<option value="Kenya"  >Kenya</option>
	                                	<option value="Kiribati"  >Kiribati</option>
	                                	<option value="Korea, North"  >Korea, North</option>
	                                	<option value="Korea, South"  >Korea, South</option>
	                                	<option value="Kuwait"  >Kuwait</option>
	                                	<option value="Kyrgyzstan"  >Kyrgyzstan</option>
	                                	<option value="Laos"  >Laos</option>
	                                	<option value="Latvia"  >Latvia</option>
	                                	<option value="Lebanon"  >Lebanon</option>
	                                	<option value="Lesotho"  >Lesotho</option>
	                                	<option value="Liberia"  >Liberia</option>
	                                	<option value="Libya"  >Libya</option>
	                                	<option value="Liechtenstein"  >Liechtenstein</option>
	                                	<option value="Lithuania"  >Lithuania</option>
	                                	<option value="Luxembourg"  >Luxembourg</option>
	                                	<option value="Macau"  >Macau</option>
	                                	<option value="Macedonia, Former Yugoslav Republic of"  >Macedonia, Former Yugoslav Republic of</option>
	                                	<option value="Madagascar"  >Madagascar</option>
	                                	<option value="Malawi"  >Malawi</option>
	                                	<option value="Malaysia"  >Malaysia</option>
	                                	<option value="Maldives"  >Maldives</option>
	                                	<option value="Mali"  >Mali</option>
	                                	<option value="Malta"  >Malta</option>
	                                	<option value="Man, Isle of"  >Man, Isle of</option>
	                                	<option value="Marshall Islands"  >Marshall Islands</option>
	                                	<option value="Martinique"  >Martinique</option>
	                                	<option value="Mauritania"  >Mauritania</option>
	                                	<option value="Mauritius"  >Mauritius</option>
	                                	<option value="Mayotte"  >Mayotte</option>
	                                	<option value="Mexico"  >Mexico</option>
	                                	<option value="Micronesia, Federated States of"  >Micronesia, Federated States of</option>
	                                	<option value="Midway Islands"  >Midway Islands</option>
	                                	<option value="Moldova"  >Moldova</option>
	                                	<option value="Monaco"  >Monaco</option>
	                                	<option value="Mongolia"  >Mongolia</option>
	                                	<option value="Montserrat"  >Montserrat</option>
	                                	<option value="Morocco"  >Morocco</option>
	                                	<option value="Mozambique"  >Mozambique</option>
	                                	<option value="Namibia"  >Namibia</option>
	                                	<option value="Nauru"  >Nauru</option>
	                                	<option value="Nepal"  >Nepal</option>
	                                	<option value="Netherlands"  >Netherlands</option>
	                                	<option value="Netherlands Antilles"  >Netherlands Antilles</option>
	                                	<option value="New Caledonia"  >New Caledonia</option>
	                                	<option value="New Zealand"  >New Zealand</option>
	                                	<option value="Nicaragua"  >Nicaragua</option>
	                                	<option value="Niger"  >Niger</option>
	                                	<option value="Nigeria"  >Nigeria</option>
	                                	<option value="Niue"  >Niue</option>
	                                	<option value="Norfolk Island"  >Norfolk Island</option>
	                                	<option value="Northern Mariana Islands"  >Northern Mariana Islands</option>
	                                	<option value="Norway"  >Norway</option>
	                                	<option value="Oman"  >Oman</option>
	                                	<option value="Pakistan"  >Pakistan</option>
	                                	<option value="Palau"  >Palau</option>
	                                	<option value="Panama"  >Panama</option>
	                                	<option value="Papua New Guinea"  >Papua New Guinea</option>
	                                	<option value="Paraguay"  >Paraguay</option>
	                                	<option value="Peru"  >Peru</option>
	                                	<option value="Philippines"  >Philippines</option>
	                                	<option value="Pitcaim Islands"  >Pitcaim Islands</option>
	                                	<option value="Poland"  >Poland</option>
	                                	<option value="Portugal"  >Portugal</option>
	                                	<option value="Puerto Rico"  >Puerto Rico</option>
	                                	<option value="Qatar"  >Qatar</option>
	                                	<option value="Reunion"  >Reunion</option>
	                                	<option value="Romainia"  >Romainia</option>
	                                	<option value="Russia"  >Russia</option>
	                                	<option value="Rwanda"  >Rwanda</option>
	                                	<option value="Saint Helena"  >Saint Helena</option>
	                                	<option value="Saint Kitts and Nevis"  >Saint Kitts and Nevis</option>
	                                	<option value="Saint Lucia"  >Saint Lucia</option>
	                                	<option value="Saint Pierre and Miquelon"  >Saint Pierre and Miquelon</option>
	                                	<option value="Saint Vincent and the Grenadines"  >Saint Vincent and the Grenadines</option>
	                                	<option value="Samoa"  >Samoa</option>
	                                	<option value="San Marino"  >San Marino</option>
	                                	<option value="Sao Tome and Principe"  >Sao Tome and Principe</option>
	                                	<option value="Saudi Arabia"  >Saudi Arabia</option>
	                                	<option value="Scotland"  >Scotland</option>
	                                	<option value="Senegal"  >Senegal</option>
	                                	<option value="Seychelles"  >Seychelles</option>
	                                	<option value="Sierra Leone"  >Sierra Leone</option>
	                                	<option value="Singapore"  >Singapore</option>
	                                	<option value="Slovakia"  >Slovakia</option>
	                                	<option value="Slovenia"  >Slovenia</option>
	                                	<option value="Solomon Islands"  >Solomon Islands</option>
	                                	<option value="Somalia"  >Somalia</option>
	                                	<option value="South Africa"  >South Africa</option>
	                                	<option value="South Georgia and South Sandwich Islands"  >South Georgia and South Sandwich Islands</option>
	                                	<option value="Spain"  >Spain</option>
	                                	<option value="Spratly Islands"  >Spratly Islands</option>
	                                	<option value="Sri Lanka"  >Sri Lanka</option>
	                                	<option value="Sudan"  >Sudan</option>
	                                	<option value="Suriname"  >Suriname</option>
	                                	<option value="Svalbard"  >Svalbard</option>
	                                	<option value="Swaziland"  >Swaziland</option>
	                                	<option value="Sweden"  >Sweden</option>
	                                	<option value="Switzerland"  >Switzerland</option>
	                                	<option value="Syria"  >Syria</option>
	                                	<option value="Taiwan"  >Taiwan</option>
	                                	<option value="Tajikistan"  >Tajikistan</option>
	                                	<option value="Tanzania"  >Tanzania</option>
	                                	<option value="Thailand"  >Thailand</option>
	                                	<option value="Tobago"  >Tobago</option>
	                                	<option value="Toga"  >Toga</option>
	                                	<option value="Tokelau"  >Tokelau</option>
	                                	<option value="Tonga"  >Tonga</option>
	                                	<option value="Trinidad"  >Trinidad</option>
	                                	<option value="Tunisia"  >Tunisia</option>
	                                	<option value="Turkey"  >Turkey</option>
	                                	<option value="Turkmenistan"  >Turkmenistan</option>
	                                	<option value="Tuvalu"  >Tuvalu</option>
	                                	<option value="Uganda"  >Uganda</option>
	                                	<option value="Ukraine"  >Ukraine</option>
	                                	<option value="United Arab Emirates"  >United Arab Emirates</option>
	                                	<option value="United Kingdom"  >United Kingdom</option>
	                                	<option value="Uruguay"  >Uruguay</option>
	                                	<option value="USA"  >USA</option>
	                                	<option value="Uzbekistan"  >Uzbekistan</option>
	                                	<option value="Vanuatu"  >Vanuatu</option>
	                                	<option value="Venezuela"  >Venezuela</option>
	                                	<option value="Vietnam"  >Vietnam</option>
	                                	<option value="Virgin Islands"  >Virgin Islands</option>
	                                	<option value="Wales"  >Wales</option>
	                                	<option value="Wallis and Futuna"  >Wallis and Futuna</option>
	                                	<option value="West Bank"  >West Bank</option>
	                                	<option value="Western Sahara"  >Western Sahara</option>
	                                	<option value="Yemen"  >Yemen</option>
	                                	<option value="Yugoslavia"  >Yugoslavia</option>
	                                	<option value="Zambia"  >Zambia</option>
	                                	<option value="Zimbabwe"  >Zimbabwe</option>
					                </select>
					              </span>
                                    <span class="col-md-12 text-default border-bottom" style="padding-bottom:5px; padding-top:5px;">
					               &nbsp;
					              </span>

                                    <span class="col-md-12 text-default " style="padding-bottom:5px; padding-top:15px;">
					               <!-- <button type="submit" class="validate btn btn-danger col-md-5">
										Filter
								   </button> -->

					               <a class="btn btn-one col-md-5 pull-right" href="#" title="Reset">
					                    Reset
					                </a>
					              </span>
                                </form>
                            </div>

                            <div class="col-md-10 border-left" style="min-height:500px;">
                                <h3 class="col-md-12 text-one">
                                    Displaying {{ $candidates->count() }} of {{ $candidates->count() }} results
                                </h3>

                                <!-- candidate row one start -->
                                <div class="row">
                                    @foreach($candidates as $candidate)
                                        <div class="col-md-6" style="margin-bottom: 10px;">
                                            <div class="myborder_radius_gray">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a href="/#" title="ABUL ">
                                                            <img src="assets/img/candidate/IMG-20190916-WA0013.jpg" border="0" alt=" " class="img-thumbnail" width="100" />
                                                        </a>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <h4 class="text-one">
                                                            {{ $candidate->full_name }}
                                                        </h4>
                                                        <h5 class="text-default">
                                                             {{ $candidate->candidateDetails->present_location }}, {{ $candidate->candidateDetails->education }},  {{ $candidate->candidateDetails->language }}
                                                        </h5>
                                                        <h4 class="text-one">
                                                            Interested for {{ $candidate->candidateDetails->country_apply }} (  )
                                                        </h4>
                                                        <h4 class="text-two">
                                                            Budget {{ $candidate->candidateDetails->budget }} Tk.
                                                            <a href="{{ route('candidateResumeDetails', $candidate->user_id) }}"  class="btn btn-one pull-right">
                                                                view more
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- candidate row one end -->
                                <div class="clr"><br /></div>
                            </div>

                            <div class="col-md-12 text-center">
                                <ul class='pagination'>
                                    <li><a class='current'>1</a> </li>
                                    <li><a href='#'>2</a></li>
                                    <li><a href='#'>3</a></li>
                                    <li><a href='#'>4</a></li>
                                    <li><a href='#'>5</a></li>
                                    <li><a href='#'>6</a></li>
                                    <li><a href='#'>Next</a></li>
                                    <li><a href='#'>Last</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- breadcrumb start -->
                <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
                    <li>
                        You are here: &#160;
                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="#" class="pathway"><span itemprop="name">Home</span></a>

                        <span class="divider"></span>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
							<span itemprop="name">
								Candidates Resumes
							</span>
                        <meta itemprop="position" content="5">
                    </li>
                </ul>
                <!-- breadcrumb start -->
            </div>
            <!-- Candidate Resume end -->
            <div class="col-md-1"></div>
        </div>
    </div>

@endsection

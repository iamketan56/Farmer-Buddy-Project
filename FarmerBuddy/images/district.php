
<!DOCTYPE html>
<html lang="en">
    <header>
        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>District</title>
    <link rel="stylesheet" href="./main.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-green pl-5" id="navigation">
        <a href="./index.html"><img src="circle-cropped (3).png" alt="" class="logo"></a>
          <button
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#myNav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="myNav">
            <ul class="navbar-nav pr-5">
             
              <li class="nav-item pr-5 pl-5 ">
              <a href="mission.html" target="_blank" style="letter-spacing:0.5rem">Mission</i></a>
              </li>
              <li class="nav-item pr-5 pl-5">
          <a href="contact.html" target="_blank" style="letter-spacing:0.5rem">About US</a>
          </li>
              <li class="nav-item pr-5 pl-5">
              <a href="blog.html" target="_blank" style="letter-spacing:0.5rem">Blog</i></a>
              </li>
              <li class="nav-item pr-5 pl-5">
          <a href="contact.html" target="_blank" style="letter-spacing:0.5rem">Details</a>
          </li>
              <li class="nav-item  pl-5">
              <a href="contact.html" target="_blank" style="letter-spacing:0.5rem">Contact US</a>
              </li>
            </ul>
          </div>
        </nav>
</header>
<div class="dist-back">
<div class="district-banner">
<?php
    echo "<h1> Welcome to {$_POST['State']}</h1>";
       $state = $_POST['State'];
       ?>
       <form action="fetchdistrict_data.php" method="post" class="form">
       <h1 class="select-your-district">Select Your District</h1>
       <select name="district" id="dis">
           <?php
       if($state == "Haryana")
       {
           $district = array("Ambala", "Bhiwani", "Charkhi Dadri","Faridabad","Fatehabad",
            "Gurugram",
            "Hissar",
            "Jhajjar",
            "Jind",
            "Kaithal",
            "Karnal",
            "Kurukshetra",
            "Mahendragarh",
            "Nuh",
            "Palwal",
            "Panchkula",
            "Panipat",
            "Rewari",
            "Rohtak",
            "Sirsa",
            "Sonipat",
            "Yamuna Nagar"
           );
         for($x = 0;$x<sizeof($district);$x++)
           {
         echo "<option>{$district[$x]}</option<br>";
       }
    }
    elseif($state == "Punjab")
    {
        $district = array("Amritsar",
            "Barnala",
            "Bathinda",
            "Firozpur",
            "Faridkot",
            "Fatehgarh Sahib",
            "Fazilka",
            "Gurdaspur",
            "Hoshiarpur",
            "Jalandhar",
            "Kapurthala",
            "Ludhiana",
            "Mansa",
            "Moga",
            "Sri Muktsar Sahib",
            "Pathankot",
            "Patiala",
            "Rupnagar",
            "Sahibzada Ajit Singh Nagar(Mohali)",
            "Sangrur",
            "Shahid Bhagat Singh Nagar",
            "Tarn Taran"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    elseif($state == "Mizoram")
    {
        $district = array( "Aizwal",
        "Champahi",
        "Hnahthial",
        "Khawzawl",
        "Kolasib",
        "Lawngtlai",
        "Lunglei",
        "Mamit",
        "Saiha",
        "Saitual",
        "Serchhip"
    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }
    elseif($state =="Rajasthan")
    {
        $district = array( 
            "Ajmer",
                    "Alwar",
                    "Bikaner",
                    "Barmer",
                    "Banswara",
                    "Bharatpur",
                    "Baran",
                    "Bundi",
                    "Bhilwara",
                    "Churu",
                    "Chittorgarh",
                    "Dausa",
                    "Dholpur",
                    "Dungarpur",
                    "Ganganagr",
                    "Hanumanagarh",
                    "Jhunjhunu",
                    "Jalore",
                    "Jodhpur",
                    "Jaipur",
                    "Jaisalmeer",
                    "Jhalwar",
                    "Karauli",
                    "Kota",
                    "Nagaur",
                    "Pali",
                    "Pratgparh",
                    "Rajsamand",
                    "Sikar",
                    "Sawai Moadhopur",
                    "Sirohi",
                    "Tonk",
                    "Udaipur"
    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }

    elseif($state == "Nagaland")
    {
        $district = array(
                   "Dimapur",
                    "Kiphire",
                    "Kohima",
                    "Longleng",
                    "Mokokchung",
                    "Mon",
                    "Noklak",
                    "Peren",
                    "Phek",
                    "Tuensang",
                    "Wokha",
                    "Zunheboto"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    elseif($state == "Gujarat")
    {
        $district = array(
            "Ahmedabad",
                    "Amreli",
                    "Anand",
                    "Aravalli",
                    "Banaskantha",
                    "Bharuch",
                    "Bhavnagar",
                    "Botad",
                    "Chhota Udepur",
                    "Dahod",
                    "Dang",
                    "Devbhoomi Dwarka",
                    "Gandhinagar",
                    "Gir Somnath",
                    "Jamnagr",
                    "Junagadh",
                    "Kheda",
                    "Kutch",
                    "Mahisagar",
                    "Mehsana",
                    "Morbi",
                    "Narmada",
                    "Navsari",
                    "Panchmahal",
                    "Patan",
                    "Probandar",
                    "Rajkot",
                    "Sabarkantha",
                    "Surat",
                    "Surendranagr",
                    "Tapi",
                    "Vadodara",
                    "Valsad"
                   
    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    
    elseif($state == "Arunachal Pradesh")
    {
        $district = array(
            "Anjaw",
            "Changlang",
            "East Kameng",
            "East Siang",
            "Kamle",
            "Daadi",
            "Kurung Kumey",
            "Lepa Rada",
            "Lohit",
            "Longding",
            "Lower Dibang Valley",
            "Lower Siang",
            "Lower Subansiri",
            "Namsai",
            "Pakke - Kessang",
            "Papum Pare",
            "Shi Yomi",
            "Siang",
            "Tawang",
            "Tirap",
            "Upper Dibang Valley",
            "Upper Siang",
            "Upper Subansiri",
            "West Kameng",
            "West Siang"           

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    elseif($state == "Assam")
    {
        $district = array(
            "Baksa",
                    "Barpeta",
                    "Bishwanath",
                    "Bongaigaon",
                    "Cachar",
                    "Charaideo",
                    "Chirang",
                    "Darrang",
                    "Dhemaji ",
                    "Dhubri ",
                    " Dibrugarh",
                    " Dima Hasao",
                    "Goalpara ",
                    " Golaghat",
                    " Hailakandi",
                    " Hojai",
                    " Jorhat",
                    " Kamrup",
                    " Kamrup Metropolitan",
                    " Karbi Anglong",
                    " Karimganj",
                    " Kokrajhar",
                    " Lakhimpur",
                    " Majuli",
                    " Morigaon",
                    " Nagaon",
                    " Nalbari",
                    " Sivasagar",
                    " South Salmara",
                    " Sonitpur",
                    " Tinsukia",
                    " Udalguri",
                    " West Karbi Anglong" 

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    elseif($state == "Bihar")
    {
        $district = array(
            "Araria",
            "Arwal",
            "Aurnagabad",
            "Banka",
            "Begusarai",
            "Bhagalpur",
            "Bhojpur",
            "Buxar",
            "Darbhanga",
            "East Chapmaran",
            "Gaya",
            "Gopalganj",
            "Jamui",
            "Jehanabad",
            "Kaimur",
            "Khagaria",
            "Kishanganj",
            "Lakhisarai",
            "Madhubani",
            "Munger",
            "Muzaffarpur",
            "Nalanda",
            "Nawada",
            "Patna",
            "Purnia",
            "Rohtas",
            "Saharsa",
            "Samastipur",
            "Saran",
            "Sheikhpura",
            "Sheohar",
            "Sitamarhi",
            "Siwan",
            "Supaul",
            "Vaishali",
            "West Champaran"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    elseif($state == "Chandigarh")
    {
        $district = array(
            
            "Chandigarh"
    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    }  

    elseif($state == "Chhattisgarh")
    {
        $district = array(
            "Balod",
                    "Baloda bazar",
                    "Balrampur",
                    "Bastar",
                    "Bijapur",
                    "Bilaspur",
                    "Dantewada",
                    "Dhamtari",
                    "Durg",
                    "Gariaband",
                    "Janjgir-Champa",
                    "Jashpur",
                    "Kabirdham",
                    "Kanker",
                    "Kondagaon",
                    "Korba",
                    "Koriya",
                    "Mahasamund",
                    "Munngeli",
                    "Narayanpur",
                    "Raigarh",
                    "Raipur",
                    "Rajnadgaon",
                    "Sukma",
                    "Surajpur",
                    "Surguja"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Dadar and Nagar Haveli")
    {
        $district = array(
            "Daman", "Diu", "Dadra and Nagar Haveli"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Delhi")
    {
        $district = array(
            "Central Delhi",
            "East Delhi",
            "New Delhi",
            "North Delhi",
            "North East Delhi",
            "North West Delhi",
            "Shahdara",
            "South Delhi",
            "South East Delhi",
            "South West Delhi",
            "West Delhi",
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Lakshadweep")
    {
        $district = array(
            "Lakshadweep"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Puducherry")
    {
        $district = array(
            "Karaikal",
                    "Mahe`",
                    "Pondicherry",
                    "Yanam"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Goa")
    {
        $district = array(
            "North Goa",
                    "South Goa"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Himachal Pradesh")
    {
        $district = array(
            "Bilaspur",
                    "Chamba",
                    "Hamirpur",
                    "Kangra",
                    "Kinnaur",
                    "Kullu",
                    "Lahaul and Spiti",
                    "Mandi",
                    "Shimla",
                    "Sirmaur",
                    "Solan",
                    "Una"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Jammu and Kashmir")
    {
        $district = array(
            "Anantnag", "Bandipora", "Baramulla", "Badgam", "Doda", "Ganderbal", "Jammu", "Kathua", "Kishtwar", "Kulgam", "Kupwara", "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi", "Samba", "Shopian", "Srinagar", "Udhampur"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Odisha")
    {
        $district = array(
            "Angul",
            "Boudh(Bauda)",
            "Bhadark",
            "Balangir",
            "Bargarh",
            "Balasore",
            "Cuttack",
            "Debagrh",
            "Dhenkanal",
            "Ganjam",
            "Gajapati",
            "Jharsugusa",
            "Jajpur",
            "Jagatsinghput",
            "Khordha",
            "Kendujhar",
            "Kalahandi",
            "Kandhamal",
            "Koraput",
            "Kendrapara",
            "Malkangiri",
            "Mayurbhanj",
            "Nabarangpur",
            "Naupada",
            "Nayagarh",
            "Puri",
            "Rayagada",
            "Sambalpur",
            "Subarnapur(Sonepur)",
            "Sundargarh"


    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Telangana")
    {
        $district = array(
            "Adilabad",
                    "Komaram Bheem",
                    "Bhadradri Kothagudem",
                    "Hyderbad",
                    "Jagtial",
                    "Jangaon",
                    "Jayashankar Bhupalpally",
                    "Jogulamba Gadwal",
                    "Kamareddy",
                    "Karimnagar",
                    "Khammam",
                    "Mahabubabad",
                    "Mahbubnagar",
                    "Mancherial",
                    "Medak",
                    "Medchal-Malkjagiri",
                    "Mulugu",
                    "Nalgonda",
                    "Narayanpet",
                    "Nagarkurnool",
                    "Nirmal",
                    "Nizambad",
                    "Peddapalli",
                    "Rajanna Sircilla",
                    "Ranga Reddy",
                    "Sangareddy",
                    "Siddipet",
                    "Suryapet",
                    "Vikarabad",
                    "Wanaparthy",
                    "Warangal Urban",
                    "Warangal Rural",
                    "Yadadri Bhuvanagiri"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Tamil Nadu")
    {
        $district = array(
            "Ariyalur",
                    "Chengalpattu",
                    "Chennai",
                    "Coimbatore",
                    "Cuddalore",
                    "Dharmapuri",
                    "Dindigul",
                    "Erode",
                    "Kallakurchi",
                    "Kanchipuram",
                    "Kanayakumari",
                    "Karur",
                    "Krishnagiri",
                    "Madurai",
                    "Mayiladuthrai",
                    "Nagapattinam",
                    "Nilgiris",
                    "Namakkal",
                    "Perambalur",
                    "Pdukkottai",
                    "Ramanathapuram",
                    "Ranipet",
                    "Salem",
                    "Sivanga",
                    "Tenkasi",
                    "Tirupur",
                    "Tiruchirappalli",
                    "Theni",
                    "Tirunelveli",
                    "Thanjavur",
                    "Toothkudi",
                    "Tirupattur",
                    "Tiruvallur",
                    "Truvarur",
                    "Tiruannmalai",
                    "Vellore",
                    "Viluppuram",
                    "Virudhumnagr"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Sikkim")
    {
        $district = array(
            "East Sikkim", "West Sikkim", "North Sikkim", "South Sikkim"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Meghalaya")
    {
        $district = array(
            "East Garo Hills", "East Jaintia Hills", "East Khasi Hills", "North Garo Hills", "Ri - Bhoi", "South Garo Hills", "South West Garo Hills", "South West Khasi Hills", "West Garo Hills", "West Jaintia Hills", "West Khasi Hills"

            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Manipur")
    {
        $district = array(
            "Bishnupur",
                    "Chandel",
                    "Churachandpur",
                    "Imphal East",
                    "Imphal West",
                    "Jiribam",
                    "Kakching",
                    "Kamjong",
                    "Kangpokpi",
                    "Pherzawl",
                    "Senapati",
                    "Tamenglong",
                    "Tengnoupal",
                    "Thoubal",
                    "Ukhrul"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Maharashtra")
    {
        $district = array(
            "Akola", "Amravati", "Buldhana", " Washim", "Yavatmal", "Mumbai", "Mumbai Suburban", "Palghar", "Raigad", "Ratnagiri", "Sindhudurg", "Thane", "Aurangabad", "Beed", "Hingoli", "Jalna", "Latur", "Nanded", "Osmanabad", "Parbhani",
                    "Bhandara", "Chandrapur", "Gadchiroli", "Gondia", "Nagpur", "Wardha", "Ahmednagar", "Dhule", "Jalgaon", "Nandurbar", "Nashik", "Kolhapur", "Pune", "Sangli", "Satara", "Solapur"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Madhya Pradesh")
    {
        $district = array(
            "Agar", "Malwa", "Alirajpur", "Anuppur", "Ashoknagar", "Balaghat", "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dindori", "Guna", "Gwalior", "Harda", "Hoshangabad", "Indore", "Jabalpur", "Jabalpur Gramin", "Jhabua", "Katni", "Khandwa", "Khargone", "Mandla", "Mandsaur", "Morena", "Narsinghpur", "NeemuchNiwari", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Satna", "Sehore", "Seoni", "Shahdol", "Sidhi", "Singrauli", "Shajapur", "Sheopur", "Shivpuri", "Tikamgarh", "Ujjain", "Umaria", "Vidisha"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Kerala")
    {
        $district = array(
            "Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasargod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "ThrissurWayanad"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Karnataka")
    {
        $district = array(
            "Bangalore Urban", " Bangalore Rural", "Chitradurga", "Davanagere", "Kolar", "Shimoga", "Tumakuru", "Ramanagara", "Chikkaballapura",

                    "Bagalkot", "Belgaum", "Bijapur", "Dharwad", "Haveri", "Gadag", "Uttara Kannada"

                    , "Ballari", "Bidar", "Gulbarga", "Koppal", "RaichurYadgir",

                    "Chamaraja nagar", "Chikmagalur", "Dakshina Kannada", "Hassan", "Kodagu", "Mandya", "Mysore", "Udupi"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Jharkhand")
    {
        $district = array(
            "Garhwa", "Palamu", "Latehar",

                    "Chatra", "Hazaribagh", "Giridih", "Koderma", "Dhanbad", "Bokaro", "Ramgarh",

                    "Ranchi", "Lohardaga", "Gumla", "SimdegaKhunti",

                    "West Singhbhum", "Seraikela Kharsawan", "East Singhbhum",

                    "Deoghar", "Jamtara", "Dumka", "Godda", "Pakur", "Sahebganj"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Uttar Pradesh")
    {
        $district = array(
            
            "Agra", "Firozabad", "Mainpuri", "Mathura",

            "Aligarh", "Etah", "Hathras", "Kasganj",

            "Allahabad", "Fatehpur", "Kaushambi", "Pratapgarh",
            "Azamgarh", "Ballia", "Mau",

            "Bareilly", "Budaun", "Pilibhit", "Shahjahanpur",
            "Basti", "Sant Kabir Nagar", "Siddharthnagar",
            "Banda", "Chitrakoot", "Hamirpur", "Mahoba",
            "Bahraich", "Balrampur", "Gonda", "Shravasti",
            "Ambedkar Nagar", "Amethi", "Barabanki", "Faizabad", "Sultanpur",

            "Deoria", "Gorakhpur", "Kushinagar", "Maharajganj",

            "Jalaun", "Jhansi", "Lalitpur",

            "Auraiya", "Etawah", "Farrukhabad", "Kannauj", "Kanpur Nagar", "Kanpur Dehat",

            "Hardoi", "Lakhimpur Kheri", "Lucknow", "Raebareli", "Sitapur", "Unnao",

            "Bagpat", "Bulandshahr", "Gautam Buddh Nagar", "Ghaziabad", "Hapur", "Meerut",

            "Mirzapur", "Sant Ravidas Nagar", "Sonbhadra",

            "Amroha", "Bijnor", "Moradabad", "Rampur", "Sambhal",

            "Muzaffarnagar", "Saharanpur", "Shamli",
            "Chandauli", "Ghazipur", "Jaunpur", "Varanasi"

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Tripura")
    {
        $district = array(
            "Dhalai",
            "Gomati",
            "Khowai",

            "North Tripura",

            "Sipahijala",
            "South Tripura",

            "Unakoti",

            "West Tripura",
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "West Bengal")
    {
        $district = array(
            "Alipurduar",
            "Bankura",
            "Birbhum",

            "Cooch Behar",
            "Dakshin Dinajpur",
            "Darjeeling",
            "Hooghly",
            "Howrah",

            "Jalpaiguri",
            "Jhargram",

            "Kalimpong",
            "Kolkata",

            "Malda",
            "Murshidabad",

            "Nadia",
            "North 24 Parganas",

            "Paschim Bardhaman",
            "Paschim Medinipur",
            "Purba Bardhaman",
            "Purba Medinipur",
            "Purulia",
            "South 24 Parganas",
            "Uttar Dinajpur",
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 

    elseif($state == "Andaman and Nicobar Islands")
    {
        $district = array(
            "Nicobar", "North and Middle Andaman", "South Andaman"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 
    elseif($state == "Andhra Pradesh")
    {
        $district = array(
            "Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Kurnool", "Krishna", "Nellore", "Prakasam", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"
            

    );
    for($x = 0;$x<sizeof($district);$x++)
    {
  echo "<option>{$district[$x]}</option<br>";
}
    } 
    ?>
    </select>
    <br><br>
    <input type="submit" name="dis-button" value="Next" class="district-input" />
</form>
</div>
</div>
<script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
</body>
</html>
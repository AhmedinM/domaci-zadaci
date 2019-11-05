<?php

function pokupi(){
    global $input; //mijenjaju se originalni podaci
    $input['ime'] = $_POST["firstName"];
    $input['prezime'] = $_POST["lastName"];
    $input['email'] = $_POST["email"];
    $input['lozinka'] = $_POST["password"];
    $input['potvdraLozinke'] = $_POST["confirmPassword"];
    $input['telefon'] = $_POST["phone"];
    $input['slika'] = $_POST["image"];
}

function provjera($in){
    $t = false;
    if(strcmp($in["lozinka"],$in["potvrdaLozinke"])==true){ //ako se lozinke poklapaju
        $t = true;
    }
    return $t;
}

function zamijeni($s){
    $z = $s; //kopija stringa
    if(strlen($s)>=12){ //podrazumijeva se da je broj ovolike dužine
        for($i=6;$i<10;$i++){
            $z[$i] = '*';
            //str_replace($s[$i],'*',$s);
        }
        return $z;
    }else{ // ako je unesen bezveze broj, neće mu pokriti cifre
        return $s;
    }
}

function poruka($p,$in){
    echo "<h1>Profil</h1>";
    if($p==true){ //ako se lozinke poklapaju
        
        $str = zamijeni($in["telefon"]); //da ne bi promijenilo broj u bazi, nego da ga samo prikaže drugačije

        echo "<table border=1>
                <tr>
                    <td>
                        <b>Ime</b>
                    </td>
                    <td>
                        {$in['ime']}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Prezime</b>
                    </td>
                    <td>
                        {$in['prezime']}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>E-Mail Adress</b>
                    </td>
                    <td>
                    {$in['email']}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Broj telefona</b>
                    </td>
                    <td>
                        $str
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Slika</b>
                    </td>
                    <td>
                        <img src=\"{$in['slika']}\" alt='Nema' width='200'/>
                    </td>
                </tr>
            </table>";
    }else{ //ako se lozinke ne poklapaju
        echo "Lozinke se ne poklapaju!";
    }
}

$input = [  //asocijativni niz
    'ime' => '',
    'prezime' => '',
    'email' => '',
    'lozinka' => '',
    'potvrdaLozinke' => '',
    'telefon' => '',
    'slika' => 'c'
];

pokupi($input); //kupi podatke sa POSTa

$p = provjera($input); //provjerava lozinke

poruka($p,$input); //štampa tabelu sa podacima

?>
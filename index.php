<?php
    require 'conectareBD.php';
?>

<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset ="UTF-8">
        <title>Pagina de pornire</title>
    </head>
    <body>
        
        <h1 style="text-align:center;">Evidenta Populatiei</h1>
        <h3 style="text-align:center;">-pagina de pornire-</h3>

        <!-- OPERATIILE DE INSERT -->
        <form action="operatiiModificare.php" method="POST" style="text-align:center;">
            <button submit="button">Operatii Modificare Cetatean</button>
            <p>Permite realizarea operatiilor de <b>insert, update, delete</b> asupra datelor din tabelul <b>Cetateni</b>.</p>
        </form><br>

        <form action="operatiiModificare2.php" method="POST" style="text-align:center;">
            <button submit="button">Operatii Modificare Adresa</button>
            <p>Permite realizarea operatiilor de <b>insert, update, delete</b> asupra datelor din tabelul <b>Adrese</b>.</p>
        </form><br>

        <center><p>Mai jos urmeaza <b><i>INTEROGARILE SIMPLE</i></b>:</p></center>

        <!-- <form action="insert_cetatean_interfata.php" method="POST" style="text-align:center;">
            <button submit="button">Insert Cetatean</button>
        </form><br> -->

        <!-- <form action="insert_adresa_interfata.php" method="POST" style="text-align:center;">
            <button submit="button">Insert Adresa</button>
        </form><br> -->

        <!-- OPERATIILE DE UPDATE -->
        <!-- <form action="update_cetatean_interfata.php" method="POST" style="text-align:center;">
            <button submit="button">Update Cetatean</button>
        </form><br> -->

        <!-- <form action="update_impozit_interfata.php" method="POST" style="text-align:center;">
            <button submit="button">Update Impozit</button>
        </form><br> -->

        <!-- INTEROGARILE SIMPLE -->
        <form action="interogare_simpla_1.php" method="POST" style="text-align:center;">
            <button submit="button">Interogare simpla 1</button>
            <p>Afiseaza <b>Nume, Prenume, Strada, Numar, Bloc, Apartament, Judet, Oras</b> pentru inregistrarile din tabelul <b>Cetateni</b>.</p>
        </form><br>

        <form action="interogare_simpla_2.php" method="POST" style="text-align:center;">
            <button submit="button">Interogare simpla 2</button>
            <p>Afiseaza <b>Nume, Prenume, CNP, Denumire, NumarBunuri (mobile si imobile)</b> pentru <i>TOATE</i> inregistrarile din tabelul <b>Cetateni</b>.</p>
        </form><br>

        <form action="interfata_interogare_3.php" method="POST" style="text-align:center;">
            <button submit="button">Interfata interogare 3</button>
            <p>Permite introducerea unei valori pentru campul <b>CNP</b> <i>(camp variabil)</i>.</p>
            <p>Pe baza <b>CNP</b>-ului introdus, afiseaza <b>Nume, Prenume, TotalDePlata </b>asociate cetateanului cu CNP-ul respectiv.</p>
        </form><br>

        <form action="interfata_interogare_4.php" method="POST" style="text-align:center;">
            <button submit="button">Interfata interogare 4</button>
            <p>Permite introducerea unei valori pentru campul <b>NrRolNominalUnic</b> <i>(camp variabil)</i>.</p>
            <p>Pe baza <b>NrRolNominalUnic</b> introdus, afiseaza <b>adresa asociata (Strada, Numar, ...) si bunurile (Descriere) de la acea adresa, impreuna cu caracteristicile (Denumire) si valorile asociate acestora (ValoareAsociata) </b>.</p>
        </form><br>

        <form action="interfata_interogare_5.php" method="POST" style="text-align:center;">
            <button submit="button">Interfata interogare 5</button>
            <p>Permite introducerea unei <b>adrese (valori pentru Strada, Numar, ...)</b> <i>(camp variabil)</i>.</p>
            <p>Pe baza <b>adresei</b> introduse, afiseaza <b>Nume, Prenume, SerieCI, NumarCI ale cetatenilor care locuiesc (sunt asociati) la acea adresa </b>.</p>
        </form><br>

        <form action="interfata_interogare_6.php" method="POST" style="text-align:center;">
            <button submit="button">Interfata interogare 6</button>
            <p>Permite introducerea unei valori pentru campul <b>NumarInmatriculare</b> (pentru campul <b>ValoareAsociata</b> care corespunde caracteristicii cu denumirea <b>NumarInmatriculare</b>) <i>(camp variabil)</i>.</p>
            <p>Pe baza <b>NumarInmatriculare</b> introdus, afiseaza <b>Nume, Prenume</b> ale cetateanului care detine bunul (care poate fi masina, motocicleta sau barca) cu numarul de inmatriculare respectiv.</p>
        </form><br>

        <center><p>Mai jos urmeaza <b><i>INTEROGARILE COMPLEXE</i></b>:</p></center>

        <form action="interogare_complexa_1.php" method="POST" style="text-align:center;">
            <button submit="button">Interogare Complexa 1</button>
            <p>Afiseaza <b>Nume, Prenume, TotalDePlata</b> pentru cetateanul a carui valoare totala de plata este cea mai mare dintre toti cetatenii.</p>
        </form><br>

        <form action="interogare_complexa_2.php" method="POST" style="text-align:center;">
            <button submit="button">Interogare Complexa 2</button>
            <p>Afiseaza <b>Nume, Prenume, StatutPersoana, NrRolNominalUnic, Oras</b> pentru cetatenii care nu au bunuri.</p>
        </form><br>

        <form action="interogare_complexa_3.php" method="POST" style="text-align:center;">
            <button submit="button">Interogare Complexa 3</button>
            <p>Pentru fiecare <b>Oras, Judet</b> afiseaza <b>valoarea toala a capacitatilor cilindrice</b> corespunzatoare.</p>
        </form><br>

        <form action="interfata_interogare_complexa_4.php" method="POST" style="text-align:center;">
            <button submit="button">Interfata Interogare Complexa 4</button>
            <p>Permite introducerea unui numar care reprezinta <b>numarul minim de bunuri dupa care facem cautarea</b> <i>(camp variabil)</i>.</p>
            <p>Afiseaza <b>Nume, Prenume, NrRolNominalUnic</b> pentru cetatenii care detin un numar de bunuri mai mare sau egal cu cel introdus.</p>
        </form><br>
    </body>
</html>
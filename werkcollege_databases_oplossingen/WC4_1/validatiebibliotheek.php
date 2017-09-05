<?php

function getVeldWaarde($naamVeld) {
    return $_POST[$naamVeld];
}

//Logische tests
function isVeldLeeg($naamVeld) {
    $waarde = getVeldWaarde($naamVeld);
    return empty($waarde);
}

function isVeldGroterDan($naamVeld, $waarde) {
    return (getVeldWaarde($naamVeld) > $waarde);
}

function isVeldNumeriek($naamVeld) {
    return is_numeric(getVeldWaarde($naamVeld));
}

function isRegexMatch($naamVeld, $regex){
    return preg_match($regex, getVeldWaarde($naamVeld));
}

//Error message generatie
function errRequiredVeld($naamVeld) {
    if (isVeldLeeg($naamVeld)) {
        return "Gelieve een waarde in te geven";
    } else {
        return "";
    }
}

function errVeldMoetGroterDanWaarde($naamVeld, $waarde) {
    if (isVeldGroterDan($naamVeld, $waarde)) {
        return "";
    } else {
        return "Waarde moet groter zijn dan " . $waarde . ".";
    }
}

function errVeldIsNumeriek($naamVeld) {
    if (isVeldNumeriek($naamVeld)) {
        return "";
    } else {
        return "Waarde moet numeriek zijn";
    }
}

function errVeldHeeftDatumVorm($naamVeld) {
    if (isRegexMatch($naamVeld, "/^\d{2}\/\d{2}\/\d{4}$/")) {
        return "";
    } else {
        return "Waarde moet van de vorm 00/00/0000 zijn";
    }
}

function errVeldIsGeheelGetalOfKommagetal($naamVeld) {
    if (isRegexMatch($naamVeld, "/^\d+(\.\d{1,2})?$/")) {
        return "";
    } else {
        return "Waarde moet een geheel getal zijn of een kommagetal met 2 cijfers na de komma";
    }
}

function errVeldIsEmailAdres($naamVeld) {
    if (isRegexMatch($naamVeld, "/([a-z|A-Z|0-9]\.?)+\@([a-z|A-Z|0-9]\.?)+(\.[a-z|A-Z]{2,3})$/")) {
        return "";
    } else {
        return "Waarde moet een valide emailadres zijn";
    }
}

function errVoegMeldingToe($huidigeErrMelding, $toeTeVoegenErrMelding) {
    if (empty($huidigeErrMelding)) {
        return $toeTeVoegenErrMelding;
    } else {
        if (empty($toeTeVoegenErrMelding)) {
            return $huidigeErrMelding;
        } else {
            return $huidigeErrMelding . "<br>" . $toeTeVoegenErrMelding;
        }
    }
}

?>

var txtToArIsRunning = false;
var txtToAr_chifIsRunning = false;
function txtToAr() {

    $('.ToAR').css("direction", "rtl");
    $('.ToAR').css('text-align', 'right');
    $('.ToAR').keypress(function (e) {

        var charcode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
        //alert('CHAR ' + charcode + ': ' + String.fromCharCode(charcode) + ' Transform : ' + FrToAr(charcode, e));

        if ((charcode >= 65 && charcode <= 90) || (charcode >= 97 && charcode <= 122) || (charcode == 44 || charcode == 63) || (charcode == 46 || charcode == 59) || (charcode == 47 || charcode == 58) || (charcode == 94 || charcode == 168) || (charcode == 33) || (charcode == 37 || charcode == 249) || (charcode == 42 || charcode == 167) || (charcode == 36 || charcode == 163) || (charcode == 8 || charcode == 9 || charcode == 32 || charcode == 46))//8 - Backspace, 9 - tab, 32 - space, 46 - delete  
        {
            if (charcode == 8 || charcode == 9 || charcode == 46) return true;

            $(this).val($(this).val() + FrToAr(charcode, e));
        }
        else {
            //alert('CHAR ' + charcode + ': ' + String.fromCharCode(charcode) + ' Transform : ' + FrToAr(charcode, e));
            switch (charcode) {
                case 221:
                case 1590:
                case 1604:
                case 1570:
                case 1604:
                case 1571:
                case 1573:
                case 1600:
                case 1604:
                case 1583:
                case 1584:
                case 1591:
                case 1586:
                case 1608:
                case 1577:
                case 1590:
                case 1604:
                case 1572:
                case 1610:
                case 1579:
                case 1576:
                case 1604:
                case 1575:
                case 1607:
                case 1578:
                case 1606:
                case 1605:
                case 1603:
                case 1609:
                case 1582:
                case 1581:
                case 1588:
                case 1602:
                case 1587:
                case 1601:
                case 1593:
                case 1585:
                case 1574:
                case 1569:
                case 1594:
                case 1589:
                    return true;
            }
        }

        return false;
    });

    $('.ToAR').keydown(function (e) {
        var charcode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
        if (charcode == 221 || charcode == 94 || charcode == 168) $(this).val($(this).val() + String.fromCharCode(1580));
        if (charcode == 32) $(this).val($(this).val() + ' ');

        //alert('CHAR ' + charcode + ': ' + String.fromCharCode(charcode) + ' Transform : ' + FrToAr(charcode, e));
    });

}



/****************************************************************************************************************/

function txtToAr_chif() {
    //if (!txtToAr_chifIsRunning) {
    //    txtToAr_chifIsRunning = true;
    $('.ToARC').css("direction", "rtl");
    $('.ToARC').css('text-align', 'right');
    $('.ToARC').keypress(function (e) {

        var charcode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
        //alert('CHAR ' + charcode + ': ' + String.fromCharCode(charcode) + ' Transform : ' + FrToAr(charcode, e));


        if ((charcode >= 65 && charcode <= 90) || (charcode >= 97 && charcode <= 122) || (charcode == 44 || charcode == 63) || (charcode == 46 || charcode == 59) || (charcode == 47 || charcode == 58) || (charcode == 94 || charcode == 168) || (charcode == 33) || (charcode == 37 || charcode == 249) || (charcode == 42 || charcode == 167) || (charcode == 36 || charcode == 163) || (charcode == 8 || charcode == 9 || charcode == 32 || charcode == 46) || (charcode >= 48 && charcode <= 57))//8 - Backspace, 9 - tab, 32 - space, 46 - delete  
        {
            if (charcode == 8 || charcode == 9 || charcode == 46 || (charcode >= 48 && charcode <= 57)) return true;

            $(this).val($(this).val() + FrToAr(charcode, e));

        }
        else {
            //alert('CHAR ' + charcode + ': ' + String.fromCharCode(charcode) + ' Transform : ' + FrToAr(charcode, e));
            switch (charcode) {
                case 221:
                case 1590:
                case 1604:
                case 1570:
                case 1604:
                case 1571:
                case 1573:
                case 1600:
                case 1604:
                case 1583:
                case 1584:
                case 1591:
                case 1586:
                case 1608:
                case 1577:
                case 1590:
                case 1604:
                case 1572:
                case 1610:
                case 1579:
                case 1576:
                case 1604:
                case 1575:
                case 1607:
                case 1578:
                case 1606:
                case 1605:
                case 1603:
                case 1609:
                case 1582:
                case 1581:
                case 1588:
                case 1602:
                case 1587:
                case 1601:
                case 1593:
                case 1585:
                case 1574:
                case 1569:
                case 1594:
                case 1589:
                    return true;
            }
        }

        return false;
    });

    $('.ToARC').keydown(function (e) {
        var charcode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode : ((e.which) ? e.which : 0));
        if (charcode == 221 || charcode == 94 || charcode == 168) $(this).val($(this).val() + String.fromCharCode(1580));
        if (charcode == 32) $(this).val($(this).val() + ' ');

        //alert('CHAR ' + charcode + ': ' + String.fromCharCode(charcode) + ' Transform : ' + FrToAr(charcode, e));
    });
    //}
}
function FrToAr(element, ev) {
    var ar;
    if (ev.shiftKey) {

        switch (element) {
            case 78: case 110: ar = String.fromCharCode(1570); break; //Shift+n| 
            case 71: case 103: ar = String.fromCharCode(1604) + String.fromCharCode(1571); break; //Shift+G| لأ
            case 72: case 104: ar = String.fromCharCode(1571); break; //Shift+h|أ
            case 89: case 121: ar = String.fromCharCode(1573); break; //Shift+Y|إ
            case 74: case 106: ar = String.fromCharCode(1600); break; //Shift+ـ|J
            case 84: case 116: ar = String.fromCharCode(1604) + String.fromCharCode(1573); break; //Shift+T| لإ
            default: return '';
        }
        return ar;
    }

    switch (element) {
        case 36: case 163: ar = String.fromCharCode(1583); break; //$|
        case 42: case 167: case 181: ar = String.fromCharCode(1584); break; //*|
        case 249: case 37: ar = String.fromCharCode(1591); break; //ù|
        case 33: ar = String.fromCharCode(1591); break; //!|
        //case 94: case 168: ar = String.fromCharCode(1580); break; //^|     
        case 58: case 47: ar = String.fromCharCode(1586); break; //:|
        case 59: case 46: ar = String.fromCharCode(1608); break; //;|
        case 44: case 63: ar = String.fromCharCode(1577); break; //,|


        case 65: case 97: ar = String.fromCharCode(1590); break; //A|
        case 66: case 98: ar = String.fromCharCode(1604) + String.fromCharCode(1575); break; //B|
        case 67: case 99: ar = String.fromCharCode(1572); break; //C|
        case 68: case 100: ar = String.fromCharCode(1610); break; //D
        case 69: case 101: ar = String.fromCharCode(1579); break; //E
        case 70: case 102: ar = String.fromCharCode(1576); break; //F
        case 71: case 103: ar = String.fromCharCode(1604); break; //G
        case 72: case 104: ar = String.fromCharCode(1575); break; //H
        case 73: case 105: ar = String.fromCharCode(1607); break; //I
        case 74: case 106: ar = String.fromCharCode(1578); break; //J
        case 75: case 107: ar = String.fromCharCode(1606); break; //K
        case 76: case 108: ar = String.fromCharCode(1605); break; //L
        case 77: case 109: ar = String.fromCharCode(1603); break; //M
        case 78: case 110: ar = String.fromCharCode(1609); break; //N
        case 79: case 111: ar = String.fromCharCode(1582); break; //O
        case 80: case 112: ar = String.fromCharCode(1581); break; //P
        case 81: case 113: ar = String.fromCharCode(1588); break; //Q
        case 82: case 114: ar = String.fromCharCode(1602); break; //R
        case 83: case 115: ar = String.fromCharCode(1587); break; //S
        case 84: case 116: ar = String.fromCharCode(1601); break; //T
        case 85: case 117: ar = String.fromCharCode(1593); break; //U
        case 86: case 118: ar = String.fromCharCode(1585); break; //V
        case 87: case 119: ar = String.fromCharCode(1574); break; //W
        case 88: case 120: ar = String.fromCharCode(1569); break; //X
        case 89: case 121: ar = String.fromCharCode(1594); break; //Y
        case 90: case 122: ar = String.fromCharCode(1589); break; //Z
        default:
            return '';
    }
    //alert(ar);
    return ar;

}

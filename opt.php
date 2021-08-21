function opt($str)
{
    preg_match_all('/опт|упак/', $str, $matches, PREG_SET_ORDER, 0);
    if($matches){
        return true;
    }else{
        return false;
    }
    
}

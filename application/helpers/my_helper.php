<?php
/**
 * PERHITUNGAN DEMPSTER SHAFER
 */
function DS_get_best($hasil){
    $num = 0;
    $max = array();
    foreach($hasil as $val){
        if($val['value'] > $num){
            $num = $val['value'];
            $max = $val;
        }
    }
    return $max;
}    

function DS_hitung($unik, $data){
    $arr = array();
    $kosong = DS_total_nilai('', $data);    
    foreach($unik as $key => $val){
        if($key!=''){      
            $arr_x = DS_total_nilai($key, $data);
            $arr[] = array(
                'arr' => $val,
                'name' => $key,
                'value' =>  array_sum($arr_x) / (1 - array_sum($kosong)),
                'desc' => '( ' . implode(' + ', array_round($arr_x)) . ' ) / ( 1 - [ ' . implode(' + ', array_round($kosong)) . ' ] )',
            );    
        }        
    }    
    //print_r($kosong);
    return $arr;
}

function DS_total_nilai($name, $data){
    $arr = array();
    foreach($data as $val){
        if($val['name']==$name){
            $arr[]=$val['value'];
        }    
    }
    return $arr;
}

function array_round($arr){
    $arr_round = array();
    foreach($arr as $key => $val){
        $arr_round[$key] = round($val, 3);
    }
    return $arr_round;
}

/**
 * FUNGSI UMUM
 */

function load_view($view, $data = array())
{
    $CI =&get_instance();
    $CI->load->view('header', $data);
    $CI->load->view($view, $data);
    $CI->load->view('footer', $data);    
}

function load_view_cetak($view, $data = array())
{
    $CI =&get_instance();
    $CI->load->view('header_cetak', $data);
    $CI->load->view($view, $data);
    $CI->load->view('footer_cetak', $data);    
}

function load_message($message = '', $type = 'danger')
{
    if($type=='danger') 
    {
        $data['title'] = 'Error';
    }
    else 
    {
        $data['title'] = 'Success';
    }
    
    $data['class'] = $type;
    $data['message'] = $message;
    
    load_view('message', $data);
    
}

function kode_oto($field, $table, $prefix, $length){
    $CI =& get_instance();
    $query = $CI->db->query("SELECT $field AS kode FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");    
    $row = $query->row_object();    
    
    if($row){
        return $prefix . substr( str_repeat('0', $length) . (substr($row->kode, - $length) + 1), - $length );
    } else {
        return $prefix . str_repeat('0', $length - 1) . 1;
    }
}

function get_kriteria_option($selected = ''){
    $CI =& get_instance();    
    $rows = $CI->kriteria_model->tampil();
    
    $a = '';
    foreach($rows as $row){
        if($selected==$row->kode_kriteria)
            $a.="<option value='$row->kode_kriteria' selected>$row->nama_kriteria</option>";
        else
            $a.= "<option value='$row->kode_kriteria'>$row->nama_kriteria</option>";
    }
    return $a;
}

function get_minmax_option($selected = ''){
    $atribut = array('maksimasi'=>'Maksimasi', 'minimasi'=>'Minimasi');   
    $a = '';
    foreach($atribut as $key => $value){
        if($selected==$key)
            $a.="<option value='$key' selected>$value</option>";
        else
            $a.= "<option value='$key'>$value</option>";
    }
    return $a;
}

function get_tipe_option($selected = ''){
    $atribut = array(
        '1'=>'Tipe 1', 
        '2'=>'Tipe 2',
        '3'=>'Tipe 3',
        '4'=>'Tipe 4',
        '5'=>'Tipe 5',
    );   
    $a = '';
    foreach($atribut as $key => $value){
        if($selected==$key)
            $a.="<option value='$key' selected>$value</option>";
        else
            $a.= "<option value='$key'>$value</option>";
    }
    return $a;
}

function print_error(){
    return validation_errors('<div class="alert alert-danger" alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>');
}
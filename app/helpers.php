<?php


if(!function_exists('showString')) {
    function showString($value)
    {
        if(strlen($value)>=10){
            return '....'.substr($value, 0, 10);
        }else{
            return substr($value, 0, 10);
            
        }
       
    }
}
if (! function_exists('check_privilege')) {
    function check_privilege($privilege) {
        $category=\App\Models\Category_privilege::where('cat_name',$privilege)->first();
        // $category_privilege=DB::statement("SELECT privileges.* FROM privileges,category_privileges where  category_privileges.cat_name='".$privilege."' and category_privileges.id=privileges.category_privilege_id and  privileges.user_id=".auth()->user()->id."     ;  ");
        if(!empty($category)){
            $privilege=\App\Models\Privilege::where('category_privilege_id',$category->id)->where('user_id',auth()->user()->id)->where('active',1)->first();
            if($privilege){
                return true;
            }else{
                return false;
            }
           
        }
        else{
            return 0;
        }
    }
}

if (! function_exists('active_link')) {
    function active_link($link = null) {
        if(Request::is($link)){
            return 'menuitem-active';
        }
    }
}

if (! function_exists('option_select')) {
    function option_select($current,$item_id) {
        if($current==$item_id){
            return 'selected';
        }
    }
}

if (! function_exists('in_list')) {
    function in_list($item,$list) {
        if(in_array($item,$list)){
            return 'selected';
        }
    }
}

if (! function_exists('option_radio')) {
    function option_radio($current,$item_id) {
        if($current===$item_id){
            return 'checked';
        }
    }
}

if(!function_exists('admin_url')) {
    function admin_url($url = null)
    {
        return url('admin/' . $url);
    }
}

if(!function_exists('get_boolean_string')) {
    function get_boolean_string($value)
    {
        if($value==1){
            return 'Yes';
        }else{
            return 'No';
        }
    }
}

if(!function_exists('img_profile')) {
    function img_profile()
    {
       
        return 'profile.png';           
    }
}


if(!function_exists('get_type')) {
    function get_type()
    {
       
        if(auth()->user()->role_id==1){
            return 'مدير الموقع';
        }else if(auth()->user()->role_id==2){
            return ' حساب شخصي';
        }             
    }
}


if(!function_exists('get_dashboard')) {
    function get_dashboard()
    {
         if(auth()->user()->role_id==1){
            return 'admin.dashboard';
        }else if(auth()->user()->role_id==2){
            return 'station.dashboard';
        }
        else if(auth()->user()->role_id==3){
            return 'employer.dashboard';
        }else if(auth()->user()->role_id==4){
            return 'company.dashboard';
        }else if(auth()->user()->role_id==5){
            return 'accountant.dashboard';
        }else if(auth()->user()->role_id==6){
            return 'manager.dashboard';
        }else if(auth()->user()->role_id==7){
            return 'regional_accountant.dashboard';
        }
               
    }
}






?>
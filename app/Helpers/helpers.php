<?php
function categoryParent($datas ,$parent = 0, $str="", $select =0){
    foreach ($datas as $data) {
        $id = $data['id'];
        $title = $data['title'];
        if ($data['parent_id'] == $parent) {
            if ($select != 0 && $id == $select) {
                echo "<option value='$id' selected='selected' > $str $title </option>";
            }else {
                echo "<option value='$id'> $str $title </option>";
            }
            categoryParent($datas ,$id, $str."--", $select);
        }
    }

}

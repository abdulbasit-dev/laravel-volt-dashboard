<?php
if (!function_exists("singular")) {
    //make title singuler
    function singular(string $title)
    {
        return substr($title, 0, -1);
    }
}

if (!function_exists("getFile")) {
    //make title singuler
    function getFile($model)
    {
        return $model->getFirstMedia() ? asset($model->getFirstMedia()->getUrl('thumb')) : "
                            https://eu.ui-avatars.com/api/?background=1F2937&color=ffffff&name={$model->name}&size=100";
    }
}

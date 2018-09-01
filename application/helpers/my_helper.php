<?php
function show_succ_msg($content='') {
    if ($content != '') {
        return  "<div class='alert alert-success'> $content </div>";
    }
}

function show_err_msg($content='') {
    if ($content != '') {
        return  "<div class='alert alert-success'> $content </div>";
    }
}

function show_validation_msg($content='') {
    if ($content != '') {
        return  "<div class='alert alert-danger'> <h5>Pesan Error</h5><hr>$content </div>";
    }
}

function show_my_modal($content='', $data='') {
    $_ci = &get_instance();

    if ($content != '') {
        $view_content = $_ci->load->view($content, $data, TRUE);

        return $view_content;
    }
}
?>
<?php
if (!defined('__XE__')) {
    exit();
}

/**
 * @file prevent_deletion.addon.php
 * @author Jaedong Kim (jdssem@gmail.com)
 * @brief 댓글이 있는 경우 게시물 삭제 금지
 *
 * */

if ($called_position == 'after_module_proc' && $this->act=='dispBoardDelete' && $logged_info->is_admin!="Y") {
    $oDocument = Context::get('oDocument');
    if ($oDocument->getCommentCount()) {
        $this->stop('댓글이 작성된 게시글은 삭제할 수 없습니다.');
    }
}

/* End of file prevent_deletion.addon.php */
/* Location: ./addons/prevent_deletion/prevent_deletion.addon.php */

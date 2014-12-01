<?php
namespace Application\Block\Infotable;

use \Concrete\Core\Block\BlockController;
class Controller extends BlockController {

    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 400;
    protected $btTable = 'btInfotable';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btCacheBlockOutputLifetime = 0; //until manually updated or cleared

    public function getBlockTypeDescription() {
        return "連絡先等を記入";
    }

    public function getBlockTypeName() {
        return "連絡先";
    }

    public function view(){
        $this->set('tel', $this->tel);
        $this->set('mail', $this->mail);
        $this->set('url', $this->url);
    }

    public function save($data) {
        $args['tel'] = $this->telcheck($data['tel']) ? $data['tel'] : '';
        $args['mail'] = filter_var($data['mail'], FILTER_VALIDATE_EMAIL) ? $data['mail'] : '';
        $args['url'] = filter_var($data['url'], FILTER_VALIDATE_URL) ? $data['url'] : '';
        parent::save($args);
    }

    protected function telcheck($tel) {
        return strlen($tel) === strspn($tel, '0123456789-');
    }
}

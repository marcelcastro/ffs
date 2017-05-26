<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry; 
use Cake\Utility\Text;
use Cake\Network\Exception\InternalErrorException;
/**
 * Upload component
 */
class UploadComponent extends Component
{

    public $max_files = 3;
    
    public function upload($data,$galeria)
            {
        if (count($data) >$this->max_files){
            $this->_registry->getController()->Flash->error('Limite de arquivos excedidos.');
            return $this->_registry->getController()->redirect(['controller' => 'images' , 'action' => 'add']);
        }
        foreach($data as $file){
            $filename = $file['name'];
            $file_tmp_name = $file['tmp_name'];
            $file_ext = substr(strchr($filename,'.'),1);
            $dir = WWW_ROOT.'img'.DS.'galerias'.DS.$galeria;
            $type_allowed = array('png','jpg','jpeg','gif');
            if(in_array($file_ext, $type_allowed)){
                $this->_registry->getController()->Flash->error('Tipo de arquivo não reconhecido');
                return $this->_registry->getController()->redirect(['action' => 'add']);
            }
            elseif(is_uploaded_file($file_tmp_name)){
                $filename = Text::uuid().'.'.$file_ext;
                $file_db = TableRegistry::get('Images');
                $entity = $file_db->newEntity();
                $entity->image = $filename;
                $file_db->save($entity);
                move_uploaded_file($file_tmp_name, $dir.DS.$filename);
            }
            else{
                $this->_registry->getController()->Flash->error(__('A imagem não foi salva. Tente novamente.'));
                return $this->_registry->getController()->redirect(['action' => 'index']);
            }
        }
        $this->_registry->getController()->Flash->success('Imagem Salva');
        return $this->_registry->getController()->redirect(['action' => 'index']);
    }
            
    
}

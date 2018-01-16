<?php
class UserController extends Controller
{
    public function actionRegister()
    {
        $model = new User;
        if (isset($_POST['User'])){
            $model->attributes = $_POST['User'];
            if ($model->save()){
                $this->redirect('list');
            }
        }
        $this->render('/user/register',array('model'=>$model));
    }
    public function actionList()
    {
        $listUser = User::model()->findAll();
        $this->render('/user/list',array('listUser'=>$listUser));
    }
    public function actionRemove()
    {
        if (isset($_GET['user_id'])){
           $userId = User::model()->findByPk($_GET['user_id']);
            if (isset($userId)){
                $userId->delete();
                $this->redirect('list');
            }else{
                $this->render('/user/error');
            }
        }
    }
    public function actionEdit()
    {
        if (isset($_GET['user_id'])){
            $user = User::model()->findByPk($_GET['user_id']);
            if (isset($user)){
                $this->render('/user/edit',array('user'=>$user));
                if (isset($_POST['User'])){
                    $user->username = $_POST['User']['username'];
                    $user->first_name = $_POST['User']['first_name'];
                    $user->last_name = $_POST['User']['last_name'];
                    $user->phone = $_POST['User']['phone'];
                    $user->birthday = $_POST['User']['birthday'];
                    $user->save();
                    $this->redirect('list');
                }
            }else{
                $this->render('/user/error');
            }
        }

    }
}
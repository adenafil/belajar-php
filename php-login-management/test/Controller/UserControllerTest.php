<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\App {
    function header(string $value)
    {
        echo $value;
    }
}

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Service {
    function setcookie(string $name, string $value)
    {
        echo "$name: $value";
    }
}

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Controller {
    use PHPUnit\Framework\TestCase;
    use ProgrammerZamanNow\Belajar\PHP\MVC\Config\Database;
    use ProgrammerZamanNow\Belajar\PHP\MVC\Domain\Session;
    use ProgrammerZamanNow\Belajar\PHP\MVC\Domain\User;
    use ProgrammerZamanNow\Belajar\PHP\MVC\Repository\SessionRepository;
    use ProgrammerZamanNow\Belajar\PHP\MVC\Repository\UserRepository;
    use ProgrammerZamanNow\Belajar\PHP\MVC\Service\SessionService;

    class UserControllerTest extends TestCase
    {
        private UserController $userController;
        private UserRepository $userRepository;
        private SessionRepository $sessionRepository;

        protected function setUp(): void
        {
            $this->userController = new UserController();

            $this->sessionRepository = new SessionRepository(Database::getConnection());
            $this->sessionRepository->deleteAll();

            $this->userRepository = new UserRepository(Database::getConnection());
            $this->userRepository->deleteAll();

            putenv("mode=test");
        }

        public function testRegister()
        {
            $this->userController->register();

            $this->expectOutputRegex('[Register]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[Name]');
            $this->expectOutputRegex('[Password]');
            $this->expectOutputRegex('[Register new User]');
        }

        public function testPostRegisterSuccess()
        {
            $_POST['id'] = 'ade';
            $_POST['name'] = 'Ade';
            $_POST['password'] = 'rahasia';

            $this->userController->postRegister();

            $this->expectOutputRegex("[Location: /users/login]");

        }

        public function testPostRegisterValidationError()
        {
            $_POST['id'] = '';
            $_POST['name'] = 'Ade';
            $_POST['password'] = 'rahasia';

            $this->userController->postRegister();

            $this->expectOutputRegex('[Register]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[Name]');
            $this->expectOutputRegex('[Password]');
            $this->expectOutputRegex('[Register new User]');
            $this->expectOutputRegex('[Id, Name, Password can not not blank or null]');

        }

        public function testPostRegisterDuplicate()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = 'Ade';
            $user->name = 'rahasia';

            $this->userRepository->save($user);

            $_POST['id'] = 'ade';
            $_POST['name'] = 'Ade';
            $_POST['password'] = 'rahasia';

            $this->userController->postRegister();

            $this->expectOutputRegex('[Register]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[Name]');
            $this->expectOutputRegex('[Password]');
            $this->expectOutputRegex('[Register new User]');
            $this->expectOutputRegex('[User Id already exist]');

        }

        public function testLogin()
        {
            $this->userController->login();

            $this->expectOutputRegex("[Login user]");
            $this->expectOutputRegex("[Id]");
            $this->expectOutputRegex("[Password]");
        }

        public function testLoginSuccess()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $_POST['id'] = 'ade';
            $_POST['password'] = 'rahasia';

            $this->userController->postLogin();

            $this->expectOutputRegex("[Location: /]");
            $this->expectOutputRegex("[Id]");
            $this->expectOutputRegex("[Password]");
            $this->expectOutputRegex("[X-PZN-SESSION: ]");
        }

        public function testLoginValidationError()
        {
            $_POST['id'] = '';
            $_POST['password'] = '';

            $this->userController->postLogin();

            $this->expectOutputRegex("[Login user]");
            $this->expectOutputRegex("[Id]");
            $this->expectOutputRegex("[Password]");
            $this->expectOutputRegex("[Id, Password can not not be blank or null]");
        }

        public function testLoginUserNotFound()
        {
            $_POST['id'] = 'dsdfsds';
            $_POST['password'] = 'dsfds';

            $this->userController->postLogin();

            $this->expectOutputRegex("[Login user]");
            $this->expectOutputRegex("[Id]");
            $this->expectOutputRegex("[Password]");
            $this->expectOutputRegex("[Id or password is wrong]");

        }

        public function testLoginWrongPassword()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $_POST['id'] = 'ade';
            $_POST['password'] = 'salah';

            $this->userController->postLogin();

            $this->expectOutputRegex("[Login user]");
            $this->expectOutputRegex("[Id]");
            $this->expectOutputRegex("[Password]");
            $this->expectOutputRegex("[Id or password is wrong]");

        }

        public function testLogout()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $this->userController->logout();

            $this->expectOutputRegex('[Location: /]');
            $this->expectOutputRegex('[X-PZN-SESSION: ]');
        }

        public function testUpdateProfil()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $this->userController->updateProfile();

            $this->expectOutputRegex('[Profile]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[ade]');
            $this->expectOutputRegex('[Name]');
            $this->expectOutputRegex('[Ade]');
        }

        public function testPostUpdateProfilSuccess()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $_POST['name'] = 'Nafil';
            $this->userController->postUpdateProfile();

            $this->expectOutputRegex('[Location: /]');

            $result = $this->userRepository->findById("$user->id");
            self::assertEquals("Nafil", $result->name);
        }

        public function testPostUpdateProfilValidationError()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $_POST['name'] = '';
            $this->userController->postUpdateProfile();

            $this->expectOutputRegex('[Profile]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[ade]');
            $this->expectOutputRegex('[Name]');
            $this->expectOutputRegex('[Id, Name can not be blank]');

        }

        public function testUpdatePassword()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';

            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $this->userController->updatePassword();

            $this->expectOutputRegex('[Password]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[ade]');
        }

        public function testPostUpdatePasswordSuccess()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';
            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $_POST['oldPassword'] = 'rahasia';
            $_POST['newPassword'] = 'masihRahasia';

            $this->userController->postUpdatePassword();

            $this->expectOutputRegex('[Location: /]');

            $result = $this->userRepository->findById($user->id);
            self::assertTrue(password_verify('masihRahasia', $result->password), "waduh error boss");

        }

        public function testPostUpdatePasswordValidationError()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';
            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $_POST['oldPassword'] = '';
            $_POST['newPassword'] = '';

            $this->userController->postUpdatePassword();

            $this->expectOutputRegex('[Password]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[ade]');
            $this->expectOutputRegex('[Id, Old Password, New Password can not not be blank or null]');

        }

        public function testPostUpdatePasswordWrongOldPassword()
        {
            $user = new User();
            $user->id = 'ade';
            $user->password = password_hash("rahasia", PASSWORD_BCRYPT);
            $user->name = 'Ade';
            $this->userRepository->save($user);

            $session = new Session();
            $session->id = uniqid();
            $session->userId = $user->id;
            $this->sessionRepository->save($session);

            $_COOKIE[SessionService::$COOKIE_NAME] = $session->id;

            $_POST['oldPassword'] = 'salah';
            $_POST['newPassword'] = 'budiyono';

            $this->userController->postUpdatePassword();

            $this->expectOutputRegex('[Password]');
            $this->expectOutputRegex('[Id]');
            $this->expectOutputRegex('[ade]');
            $this->expectOutputRegex('[Old password is wrong]');


        }
    }
}


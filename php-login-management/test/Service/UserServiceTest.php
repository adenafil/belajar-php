<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Service;

use PHPUnit\Framework\TestCase;
use ProgrammerZamanNow\Belajar\PHP\MVC\Config\Database;
use ProgrammerZamanNow\Belajar\PHP\MVC\Domain\User;
use ProgrammerZamanNow\Belajar\PHP\MVC\Exception\ValidationException;
use ProgrammerZamanNow\Belajar\PHP\MVC\Model\UserLoginRequest;
use ProgrammerZamanNow\Belajar\PHP\MVC\Model\UserPasswordUpdateRequest;
use ProgrammerZamanNow\Belajar\PHP\MVC\Model\UserProfileUpdateRequest;
use ProgrammerZamanNow\Belajar\PHP\MVC\Model\UserRegisterRequest;
use ProgrammerZamanNow\Belajar\PHP\MVC\Repository\SessionRepository;
use ProgrammerZamanNow\Belajar\PHP\MVC\Repository\UserRepository;

class UserServiceTest extends TestCase
{
    private UserService $userService;
    private UserRepository $userRepository;
    private SessionRepository $sessionRepository;

    protected function setUp(): void
    {
        $connection = Database::getConnection();

        $this->sessionRepository = new SessionRepository(Database::getConnection());

        $this->userRepository = new UserRepository($connection);
        $this->userService = new UserService($this->userRepository);

        $this->sessionRepository->deleteAll();
        $this->userRepository->deleteAll();
    }

    public function testRegisterSuccess()
    {
        $request = new UserRegisterRequest();
        $request->id = "ade";
        $request->name = "Ade";
        $request->password = "rahasia";

        $response = $this->userService->regiser($request);

        self::assertEquals($request->id, $response->user->id);
        self::assertEquals($request->name, $response->user->name);
        self::assertNotEquals($request->password, $response->user->password);

        self::assertTrue(password_verify($request->password, $response->user->password));
    }

    public function testRegisterFailed()
    {
        $this->expectException(ValidationException::class);
        $request = new UserRegisterRequest();
        $request->id = "";
        $request->name = "";
        $request->password = "";

        $this->userService->regiser($request);

    }

    public function testRegisterDuplicate()
    {
        $user = new User();
        $user->id = "ade";
        $user->name = "Ade";
        $user->password = "rahasia";

        $this->userRepository->save($user);

        $this->expectException(ValidationException::class);

        $request = new UserRegisterRequest();
        $request->id = "ade";
        $request->name = "Ade";
        $request->password = "rahasia";

        $response = $this->userService->regiser($request);

    }

    public function testLoginNotFound()
    {
        self::expectException(ValidationException::class);
        $request = new UserLoginRequest();
        $request->id = "ade";
        $request->password = "ade";

        $this->userService->login($request);
    }

    public function testLoginWrongNumber()
    {
        $user = new User();
        $user->id = 'ade';
        $user->name = 'Ade';
        $user->password = password_hash("ade", PASSWORD_BCRYPT);

        $this->userRepository->save($user);

        self::expectException(ValidationException::class);
        $request = new UserLoginRequest();
        $request->id = "ade";
        $request->password = "salah";

        $this->userService->login($request);

    }

    public function testLoginSuccess()
    {
        $user = new User();
        $user->id = 'ade';
        $user->name = 'Ade';
        $user->password = password_hash("ade", PASSWORD_BCRYPT);

        $this->userRepository->save($user);

        $request = new UserLoginRequest();
        $request->id = "ade";
        $request->password = "ade";

        $response = $this->userService->login($request);
        self::assertSame($user->id, $response->user->id);
        self::assertTrue(password_verify($request->password, $response->user->password));
    }

    public function testUpdateSuccess()
    {
        $user = new User();
        $user->id = 'ade';
        $user->name = 'Ade';
        $user->password = password_hash("ade", PASSWORD_BCRYPT);
        $this->userRepository->save($user);

        $request = new UserProfileUpdateRequest();
        $request->id = "ade";
        $request->name = "Nafil";

        $response = $this->userService->updateProfile($request);

        $result = $this->userRepository->findById($user->id);

        self::assertEquals($request->name, $result->name);
    }

    public function testUpdateValidationError()
    {
        $this->expectException(ValidationException::class);

        $request = new UserProfileUpdateRequest();
        $request->id = "";
        $request->name = "";

        $this->userService->updateProfile($request);
    }

    public function testUpdateNotFound()
    {
        $this->expectException(ValidationException::class);

        $request = new UserProfileUpdateRequest();
        $request->id = "ade";
        $request->name = "ade";

        $this->userService->updateProfile($request);
    }

    public function testUpdatePasswordSuccess()
    {
        $user = new User();
        $user->id = 'ade';
        $user->name = 'Ade';
        $user->password = password_hash("ade", PASSWORD_BCRYPT);
        $this->userRepository->save($user);

        $request = new UserPasswordUpdateRequest();
        $request->id = "ade";
        $request->oldPassword = 'ade';
        $request->newPassword = 'new';

        $this->userService->updatePassword($request);

        $result = $this->userRepository->findById($user->id);
        self::assertTrue(password_verify($request->newPassword, $result->password), "Waduh salah boss");
    }

    public function testUpdatePasswordValidationError()
    {
        $this->expectException(ValidationException::class);

        $request = new UserPasswordUpdateRequest();
        $request->id = "ade";
        $request->oldPassword = '';
        $request->newPassword = '';

        $this->userService->updatePassword($request);

    }

    public function testUpdatePasswordWrongOldPassword()
    {
        $this->expectException(ValidationException::class);
        $user = new User();
        $user->id = 'ade';
        $user->name = 'Ade';
        $user->password = password_hash("ade", PASSWORD_BCRYPT);
        $this->userRepository->save($user);

        $request = new UserPasswordUpdateRequest();
        $request->id = "ade";
        $request->oldPassword = 'salah';
        $request->newPassword = 'new';

        $this->userService->updatePassword($request);
    }

    public function testUpdatePasswordNotFound()
    {
        $this->expectException(ValidationException::class);

        $request = new UserPasswordUpdateRequest();
        $request->id = "ade";
        $request->oldPassword = 'ade';
        $request->newPassword = 'new';

        $this->userService->updatePassword($request);

    }
}

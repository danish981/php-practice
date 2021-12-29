<?php

interface UserInterface
{

    public function createData(string $username);

    public function updateData(string $updateString);

    public function deleteDate(int $id);

    public function removeCollection(int $id);

    public function saveValue(int $id, string $value);

}




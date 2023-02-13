<?php

class TestParentClass {

    public static function getClassName(): string {
        return __CLASS__;
    }

    public function whoAmI(): string {
        return 'Channel Name => Perfect Web Solutions \n';
    }

    public function sameNameMethod(): string {
        return "I am a " . __METHOD__ . "\b";
    }

    public function countryNames(): array {
        return [
            'pakistan', 'russia', 'afghanistan', 'iran', 'china', "afghanistan", "turky", "azarbaijan"
        ];
    }

}

<?php

class TestParentClass {
    function whoAmI(): string {
        return "perfect web solutions \n";
    }

    function sameNameMethod() {
        return "I am a " . __METHOD__ . "\b";
    }

    public function countryNames(): array {
        return [
            'pakistan', 'russia', 'afghanistan', 'iran', 'china', "afghanistan", "turky", "azarbaijan"
        ];
    }

}

<?php

namespace KawtharStudios;

use Exception;

class SF15to18
{
    /**
     * Convert a 15 character Salesforce ID to 18 characters
     *
     * @param string $id The 15 character ID to be converted
     * @return string The 18 character equivalent
     * @throws Exception When the ID is not 15 or 18 characters
     */
    public static function convert(string $id): string
    {
        $charString = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ012345';
        $patternFor15 = "/[a-zA-Z0-9]{15}/i";

        if (strlen($id) == 18) {
            return $id;
        }

        if (strlen($id) != 15 || !preg_match($patternFor15, $id)) {
            throw new Exception("To convert, ID must be a valid Salesforce ID of exactly 15 characters");
        }

        // Split the 15 characters into 3 sets of 5 characters
        for ($i = 0; $i < 3; $i++) {
            $charPosition = 0;

            // For every set of 5, iterate through each character
            for ($j = 0; $j < 5; $j++) {
                $charInSubset = substr($id, (($i * 5) + $j), 1);

                // If character is non-numeric and an upper case, set it to 1 in reverse order
                if (!is_numeric($charInSubset) && ctype_upper($charInSubset)) {
                    $charPosition += 1 << $j;
                }
            }

            // Append the character at the position calculated to the initial ID
            $id .= substr($charString, $charPosition, 1);
        }

        return $id;
    }
}
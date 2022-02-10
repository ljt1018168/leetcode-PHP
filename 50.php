<?
class Solution
{
    function Pownum($x, $n)
    {
        if (1 == $n) {
            return $x;
        }
        if ($n % 2 != 0) {
            $n = Intval($n / 2);
            $half = $this->Pownum($x, $n);
            return $half * $half * $x;
        } else {
            $n = Intval($n / 2);
            $half = $this->Pownum($x, $n);
            return $half * $half;
        }
    }

    /**
     * @param Float $x
     * @param int $n
     * @return Float
     */
    function myPow($x, $n)
    {
        if (0 == $n || 1 == $x) {
            return 1;
        }
        if ($n < 0) {
            return 1 / ($this->Pownum($x, abs($n)));
        }
        return $this->Pownum($x, $n);
    }
}

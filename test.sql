SELECT id,ar,epc,epl
FROM test
WHERE ar = (SELECT ar FROM test WHERE id=29)
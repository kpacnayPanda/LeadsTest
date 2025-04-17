SELECT id,cr,ar,epc,epl
FROM test
WHERE cr = (SELECT cr FROM test WHERE id=29) AND ar = (SELECT ar FROM test WHERE ID=29)
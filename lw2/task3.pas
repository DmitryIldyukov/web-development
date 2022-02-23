PROGRAM HelloAnyone(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {HelloAnyone}
  QueryString := GetEnv('QUERY_STRING');
  WRITELN;
  IF QueryString = ''
  THEN
    WRITELN('Hello Anonymous!')
  ELSE
    WRITELN('Hello dear, ', QueryString, '!')
END. {HelloAnyone}
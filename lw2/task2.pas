PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {SarahRevere}
  QueryString := GetEnv('QUERY_STRING');
  WRITELN;
  IF QueryString = 'lanterns=1'
  THEN
    WRITELN('The british are coming by land.')
  ELSE
    IF QueryString = 'lanterns=2'
    THEN
      WRITELN('The british are coming by sea.')
    ELSE
      WRITELN('Sarah did not say anything')
END.
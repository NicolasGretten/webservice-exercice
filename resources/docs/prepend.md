# Asynchronous routes

Some API routes are asynchronous. This means that the final state when creating or modifying a record is not in the body of the response. To know the final state you must query the record via the http get method and read the 'status' field. By default, this field has the value PENDING, which means that the process has not yet been validated. At the end of processing, the 'status' field changes to the value SUCCESS. If this fails, the field changes to FAILURE.

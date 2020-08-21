# Asynchronous routes

Some API routes are asynchronous. This means that the final state when creating or modifying a record is not in the response body. To know the final status, you must query the record via the HTTP GET method and read the 'status' field. By default it is set to PENDING, which means that the process has not yet been committed. At the end of processing, the "status" field takes the value SUCCESS or FAILURE.

To find out if a route is asynchronous, you must read the async field (true or false) in the body of the response.

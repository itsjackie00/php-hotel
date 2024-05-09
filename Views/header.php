<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- CSS -->
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>PHP Hotel</title>
</head>

<body>
    <header>
        <h1 class="text-center">PHP Hotel</h1>
        <div class="container d-flex justify-content-end mt-5 mb-5  ">
            <h3 class="text-center">Find your hotel</h3>
            <div>
                <form method="GET" class="form-check">
                    <select name="parking" class="form-control">
                        <option value="all">All</option>
                        <option value="1">Parking</option>
                        <option value="0">No Parking</option>
                    </select>
                    <div class="form-group">
                        <label for="vote">Vote</label>
                        <form method="GET">
                            <select class="form-control" name="vote">
                                <option value="tutti">Tutti</option>
                                <option value="1">1 stella
                                </option>
                                <option value="2">2 stelle
                                </option>
                                <option value="3">3 stelle
                                </option>
                                <option value="4">4 stelle
                                </option>
                                <option value="5">5 stelle
                                </option>
                            </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                </form>
            </div>
        </div>
    </header>
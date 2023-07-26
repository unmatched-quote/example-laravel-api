# How to navigate this

Start with `routes/api/v1/claims.php` file. It's the central point that shows the use of `Input` and `Output` objects.and

Route of interest is `POST claim/submission` for which there's an Action split into Pipeline and Stages.

There's an integration test available at `tests/Integration/Actions/Claims/CreateClaimPipelineTest.php` which mutates the state object and performs actions against actual DB.
It's a showcase of how action/pipeline/stage is tested.

## What are input and output objects

The two mentioned are simple classes that contain metadata required to generate Swagger and GraphQL definitions.

Files that get generated are available at `storage/app/apollo-graphql/*` and `storage/app/swagger/api-docs.json`


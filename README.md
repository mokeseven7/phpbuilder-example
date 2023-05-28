# Example PHP Builder Implementation 

This is a demo repository for [phpbuilder](https://github.com/mokeseven7/phpbuilder) that shows a simple implementation of how to use the construct. 

There is a sample dockerfile that will build php from source on the AMI that represents the underlying serverless environment (remember when you had to actually spin up a linux AMI and do this part directly on a running machine? Dark times).

Then there is a sample Stack inside `lib/` that demonstrates how to use the phpbuilder construct. 

I wanted to keep this example as simple as possible, but I assumed a lambda use case, which is why the `runtime/boostrap` and `src/index.php` are included as well. 

The purpose was really to demonstrate the flexabilty of the construct wrapper, and why I feel like the time spent on those types of automations are worth it. 

With a few more lines of CDK Code, this stack the container as a custom authorizer for an api gateway, have an entire app added to it with an ALB put in front, shipped to fargate, its really only limited by the imagination. 

## Deployment

If you'd like to deploy the sample to see it work, simply run `cdk synth && cdk deploy`. No build args are required. If you do deploy it, take a look at the step function and codebuild project created by the wrapper. This was one idea I when making the wrapper lib, unsure if it would actually work, and it ended up working out great. 
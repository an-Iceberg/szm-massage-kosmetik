use actix_web::{get, HttpResponse};
use tera::Context;
use crate::TERA;

#[get("/")]
async fn index() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "Home");
  context.insert("header_text", "Hello World");

  let body = TERA.render("index.html", &context).expect("Failed to render index.html");

  HttpResponse::Ok().body(body)
}

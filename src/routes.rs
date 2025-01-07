use actix_web::{delete, get, post, put, patch, HttpResponse};
use tera::Context;
use crate::TERA;

#[get("/")]
async fn index() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "Homepage");
  context.insert("header_text", "Header");

  let body = TERA.render("pages/index.html", &context).expect("Failed to render index.html");

  HttpResponse::Ok().body(body)
}

#[get("/create_blog")]
async fn create_blog() -> HttpResponse
{
  let mut context = Context::new();
  context.insert("page_title", "Create blog");
  // context.insert("header_text", "Create blog");

  let body = TERA.render("pages/create_blog.html", &context).expect("Failed to render create_blog.html");

  HttpResponse::Ok().body(body)
}
